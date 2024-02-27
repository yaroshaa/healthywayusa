<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class NewMessageFromContactPage extends Mailable
{
    use Queueable, SerializesModels;

    private array $data;
    /**
     * Create a new message instance.
     *
     */
    public function __construct($userName, $userCompany, $userEmail, $userPhone, $userMessage )
    {
        $this->data['name'] = $userName;
        $this->data['company'] = $userCompany;
        $this->data['email'] = $userEmail;
        $this->data['phone'] = $userPhone;
        $this->data['message'] = $userMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New message from contact page healthywayproduction.com')
            ->markdown('mails.messageFromContactPage', [
                'data' => $this->data
            ]);
    }
}
