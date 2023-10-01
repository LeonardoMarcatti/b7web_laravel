<?php

namespace App\Jobs;

use App\Mail\RegisterMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private array $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Colocamos o envio de email numa queue para ser executado depois
        Mail::to('leonardomarcatti@hotmail.com')->cc('test1@test.com')->bcc('test2@test.com')->send(new RegisterMail($this->data));
    }
}
