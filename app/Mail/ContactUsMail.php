<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fromName;

    public $fromEmail;

    public $subject;

    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fromName, $fromEmail, $subject, $body)
    {
        $this->fromName = $fromName;
        $this->fromEmail = $fromEmail;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-us')
            ->subject('[contact-us] ' . $this->subject)
            ->with([
                'name' => $this->fromName,
                'email' => $this->fromEmail,
                'subject' => $this->subject,
                'pesan' =>  $this->body,
            ]);
    }
}