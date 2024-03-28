<?php

namespace App\Http\Controllers;

use App\Models\DataPage;
use App\Models\PocketOptionNotify;
use App\Models\SessionUser;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Validator;
use App\Models\Aplication;
use App\Models\Reviews;

class UserController extends Controller
{

    public function index()
    {
        $settings = DataPage::first();
        $reviews = Reviews::all();
        return view("main", ["settings" => $settings, "reviews" => $reviews]);
    }
    public function Auth(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('lk');
        }
        else{
            return redirect()->back()->withErrors(['error' => 'Invalid creditals'])->withInput();
        }
    }
    public function lk()
    {
        $user = Auth::user();
        if($user->access_expiried < Carbon::now()){
            $user->access = 0;
            $user->save();
        }
        return view("lk.index", ['user' => $user]);
    }
    public function login()
    {
        return view("auth.login");
    }
    public function signup()
    {

        return view("auth.signup");
    }
    public function createUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
//            $user = $request->user();
//            $user->verification_token = Str::random(40);
//            $user->save();
//            $user->notify(new EmailVerificationNotification());
//            return redirect()->route('email.verification');
            return redirect()->route('lk');
        } else {

            return redirect()->back()->withErrors(['error' => 'Failed to create user'])->withInput();
        }
    }


    public function emailVerification()
    {
        return view("auth.verification");
    }

    public function resetPassword()
    {
        return view("auth.reset-password");
    }

    public function settings()
    {
        $user = Auth::user();
        if($user->full_name){
            $user['last_name'] = explode(" ", $user->full_name)[0];
            $user['first_name'] = explode(" ", $user->full_name)[1];
        }
        else{
            $user['last_name'] = "";
            $user['first_name'] = "";
        }
        return view("lk.settings", ['user' => $user]);
    }
    public function baseSettingsSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'tg_user' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        $user->tg_username = $request->tg_user;
        $user->full_name = $request->lastName . " ". $request->firstName;
        $user->save();
        return redirect()->route('lk.settings');



    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'new_password_confirmation' => 'required|string|min:6|same:new_password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->route('lk.settings');
        }
        else{
            return redirect()->back()->withErrors(['error' => 'Invalid old password'])->withInput();
        }
    }

    public function applicationRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pocketOption' => 'required|int|max:10:min:5',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = Auth::user();
        $app = new Aplication();
        $app->id_user = $user->id;
        $app->id_pocketOption = $request->id_pocketOption;
        $app->status = "waiting";
        $app->save();



    }
    public function settingsAdmin()
    {
        $settings = DataPage::first();
        $reviews = Reviews::all();
        return view("admin.settings", ["settings" => $settings, "reviews" => $reviews]);
    }


    public function createReview(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'avatar' => 'required|file|mimes:jpeg,png,jpg,gif,svg,ico',
            'text' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }
        $file = $request->file('avatar');
        $file_name = $file->getClientOriginalName().time();
        $path = 'avatars/' .$file_name;

        $file->move(public_path('avatars'), $file_name);

        $review = new Reviews();
        $review->name = $request->name;
        $review->avatar_path = $path;
        $review->text = $request->text;
        $review->save();
        return response()->json(['message' => 'Review created successfully'], 201);
    }

    public function deleteReview($id)
    {
        $review = Reviews::find($id);
        $review->delete();
        return redirect()->back();
    }

    public function settingsSave(Request $request)
    {
        $settings = DataPage::first();

        foreach ($request->all() as $key => $value){
            if($key == "_token") continue;
            $settings->$key = $value;
        }
        $settings->save();
        return redirect()->back();
    }

    public function pocketOptionNotify(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $notify = new PocketOptionNotify();
        $notify->reg = $data['reg'];
        $notify->conf = $data['conf'];
        $notify->ftd = $data['ftd'];
        $notify->dep = $data['dep'];
        $notify->click_id = $data['click_id'];
        $notify->site_id = $data['site_id'];
        $notify->trader_id = $data['trader_id'];
        $notify->sumdep = $data['sumdep'];
        $notify->a = $data['a'];
        $notify->ac = $data['ac'];
        $notify->save();

    }

    public function checkUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pocketOption' => 'required|int|max:10:min:5',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $PO = PocketOptionNotify::where("trader_id", $request->id_pocketOption)->where("ftd", 1)->where("sumdep" > 50)->first();
        if($PO){
            $user = Auth::user();
            $user->access = 1;
            $user->access_expiried = Carbon::now()->addDays(30);
            $user->save();
            return response()->json(['status' => 'success'], 200);
        }
        else{
            return response()->json(['status' => 'error'], 404);
        }
    }

    public function indexAdmin()
    {
        $users = User::all();
        $PKT = PocketOptionNotify::all();
        return view("admin.index", ["users" => $users, "PKT" => $PKT]);
    }
    public function accessUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email|exists:users,email',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 401);
        }
        $user = User::where("email", $request->user_email)->first();
        $user->access = 1;
        $user->access_expiried = Carbon::parse($request->date_expiried)->format('Y-m-d H:i:s');
        $user->save();

        return response()->json(['message' => 'Доступ пользователю выдан'], 201);


    }

    public function banUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email|exists:users,email',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 401);
        }
        $user = User::where("email", $request->user_email)->first();
        $user->isBan = 1;
        $user->ban_expiried = Carbon::parse($request->date_expiried)->format('Y-m-d H:i:s');
        $user->save();
        return response()->json(['message' => 'Пользователь заблокирован'], 201);
    }
}
