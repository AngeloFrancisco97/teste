<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoContato extends Mailable
{
    use Queueable, SerializesModels;
    public $nome;
    public $email;
    public $mensagem;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contato)
    {
        $this->nome = $contato['nome'];
        $this->email = $contato['email'];
        $this->mensagem = $contato['mensagem'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.novo_contato')->subject('Nova mensagem');
    }
}
