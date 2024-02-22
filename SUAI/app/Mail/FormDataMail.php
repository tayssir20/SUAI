<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\formData;

class FormDataMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param FormData $formData
     */
    public function __construct($formData)
    {
        $this->formData= $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
          return $this->from($this->formData->email)
                    ->subject('Nouveau formulaire soumis')
                    ->view('thankyou');


    }
}
