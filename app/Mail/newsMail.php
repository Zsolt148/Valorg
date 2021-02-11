<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $url)
    {
        $this->data = $data;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.news-mail', ['data' => $this->data, 'url' => $this->url])
                    ->subject('Valorg.hu - Új hír az oldalon');
    }
}
