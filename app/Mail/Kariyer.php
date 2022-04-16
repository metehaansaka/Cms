<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kariyer extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject(getFormLanguage(7,'tr')->name)->markdown('mail.kariyer', [
                'data' => $this->data,
            ]);
            if($this->data->dosya){
            $file = $this->data->dosya;
                $email->attach($file->getRealPath(), array(
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType())
                );
            }
            return $email;
    }
}
