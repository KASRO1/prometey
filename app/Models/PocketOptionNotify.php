<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PocketOptionNotify extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg',
        'conf',
        'ftd',
        'dep',
        'click_id',
        'site_id',
        'trader_id',
        'sumdep',
        'a',
        'ac',
    ];
}
