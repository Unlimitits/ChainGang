<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Nieuwsbrief extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nieuwsbrief)
    {
        $this->nieuwsbrief = $nieuwsbrief;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        dd($this->nieuwsbrief);
        return $this->from('nieuwsbrief@chaingang.com')
            ->view('Email.nieuwsbrief')
            ->with([
                'title'     => $this->nieuwsbrief->nieuwsbrief_titel, //this works without queue
                'content'     => $this->nieuwsbrief->nieuwsbrief_text, //this works without queue
                'datum' => $this->nieuwsbrief->nieuwsbrief_datum,
            ]);
    }
}
