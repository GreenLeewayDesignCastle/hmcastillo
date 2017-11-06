<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The email instance.
     *
     * @var array
     */
    private $email = [];

    public function __construct(array $email)
    {
        $this->email =  $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd('buid');    
        return $this->view('mail.contact');
    }
}
