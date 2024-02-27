<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewQuestionFaq extends Mailable
{
    use Queueable, SerializesModels;

    private array $data;
    /**
     * Create a new message instance.
     *
     */
    public function __construct($name, $userEmail, $question)
    {
        $this->data['name'] = $name;
        $this->data['email'] = $userEmail;
        $this->data['question'] = $question;
        $this->data['answer_link'] = url('faq');

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->subject('New Question on the site healthywayproduction.com')
            ->markdown('mails.newQuestionOnFaq', [
                'data' => $this->data
            ]);
    }
}
