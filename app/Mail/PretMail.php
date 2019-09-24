<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PretMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pret;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pret)
    {
        $this->pret = $pret;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->pret['email'])->view('back.email.pret');
    }
}
