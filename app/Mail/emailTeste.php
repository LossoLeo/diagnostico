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
    public $user;
    public $sector;
    public $socials; 
    public $questions;
    public $concept;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $sector, $socials, $questions, $concept, $link)
    {
        $this->user = (array) $user;
        $this->sector = $sector; 
        $this->socials = $socials;
        $this->questions = $questions;
        $this->concept = $concept;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova empresa necessitando de um diagnóstico')->markdown('Email/emailTeste',[
            'user' => $this->user
        ]);
    }
}
