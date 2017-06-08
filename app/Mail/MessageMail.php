<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function build()
    {
      return $this->from($this->message->email, $this->message->name)
        ->subject('Personal web message')
        ->view('mail.message')
        ->with(['content' => $this->message->content]);
    }
}
