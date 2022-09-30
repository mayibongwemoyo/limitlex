<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this -> data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contactForm');
        return $this ->view('emails.demoMail');

        // return $this ->from('may@example.org', 'May Tutorial')
        // ->subject($this->data['subject'])
        // ->view('emails.demoMail')->with('data',$this->data);
    }
}
