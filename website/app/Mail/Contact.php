<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $re;
    public function __construct($re){
        $this->re = $re;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        $address = $this->re['email'];
        $name = $this->re['name'];
        $subject = $this->re['subject'];
        $this->replyTo($address);
        return $this->view('emails.contact')
            ->from($address, $name)
            ->subject($subject)
            ->with('re', $this->re);
    }
}
