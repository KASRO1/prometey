<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailVerificationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->greeting('Здравствуйте!')
            ->subject('Подтверждение адреса электронной почты')
            ->line('Пожалуйста, нажмите на кнопку ниже, чтобы подтвердить свой адрес электронной почты.')
            ->action('Подтвердить Email', $verificationUrl)
            ->line('Если вы не создавали аккаунт, просто проигнорируйте это сообщение.');
    }

    protected function verificationUrl($notifiable)
    {
        return url('/email/verify/'.$notifiable->getKey().'/'.$notifiable->verification_token); // Пример ссылки
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
