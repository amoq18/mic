<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VirementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $virement;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($virement)
    {
        $this->virement = $virement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->virement['email'])->view('back.email.virement');
    }
}
