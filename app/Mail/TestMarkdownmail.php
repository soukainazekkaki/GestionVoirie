<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMarkdownmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
// on a le déclarer car on a l'utilisé dans le fichier view/emails/markdown-test 
     public $url = 'http://test.com';
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // on doit préciser un sendeur (l'emetteur )
        return $this->from('meryem@gmail.com')
        ->markdown('emails.markdouwn-test');
    }
}
