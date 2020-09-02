<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $count;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->count=$count;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Se envia el correo con la plantilla welcome ubicada en la carpeta emails dentro de la carpeta view
        return $this->view('emails.welcome');
    }
}
