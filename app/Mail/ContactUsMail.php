<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-us')
            ->subject('[contact-us] ' . $this->request['subject'])
            ->with([
                'name' => $this->request['name'],
                'email' => $this->request['email'],
                'subject' => $this->request['subject'],
                'pesan' =>  $this->request['message'],
            ]);
    }
}