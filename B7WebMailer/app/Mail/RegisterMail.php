<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public array $data;
  
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
  
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo Mail',
            from: new Address('leonardomarcatti@hotmail.com', 'Leonardo Marcatti'),
            replyTo: [
                new Address('taylor@example.com', 'Taylor Otwell'),
            ],
        );
    }
  
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.register',
        );
    }
  
    /**
     * Get the attachments for the message.
     *
     * @return array

     */
    public function attachments(): array
    {
        return [Attachment::fromPath('/var/www/html/programacao/curso/B7Web/laravel/B7WebMailer/public/favicon.ico')->as('ico.ico')->withMime('image/vnd.microsoft.icon')];
    }
}
