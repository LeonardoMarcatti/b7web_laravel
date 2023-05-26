<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private array $data;
    public function index()
    {
        $this->data['title'] = 'Título do Email';
        $this->data['body'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi nobis non officia ullam asperiores reprehenderit nesciunt? Cum, iure. Id culpa error earum magnam delectus placeat deserunt ex nostrum dolorum?';
         
        Mail::to('leonardomarcatti@hotmail.com')->send(new RegisterMail($this->data));
           
        dd("Email is sent successfully.");
        
    }
}
