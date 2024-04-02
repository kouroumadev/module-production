<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TransfertDoc extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private $to_dept_name, private $from_dept_name, 
                                private $from_mail,private $from_user_name, private $no_dossier)
    {
        $this->to_dept_name = $to_dept_name;
        $this->from_dept_name = $from_dept_name;
        $this->from_mail = $from_mail;
        $this->from_user_name = $from_user_name;
        $this->no_dossier = $no_dossier;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->markdown('mail.transfert.docNotification',
            ['from_dept_name' => $this->from_dept_name, 'to_dept_name' => $this->to_dept_name,
            'from_mail' => $this->from_mail,'from_user_name' => $this->from_user_name,'no_dossier' => $this->no_dossier]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'from_user_name' => $this->from_user_name,
            'from_dept_name'  => $this->from_dept_name,
            'no_dossier' => $this->no_dossier,
            'from_mail'  => $this->from_mail,
        ];
    }
}
