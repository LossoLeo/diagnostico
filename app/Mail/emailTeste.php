<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Candidate;

class emailTeste extends Mailable
{
    use Queueable, SerializesModels;
    public $candidate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Candidate $newCandidate)
    {
        $this->candidate = $newCandidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova empresa necessitando de um diagnóstico')->markdown('Email/emailTeste');
    }
}
