<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
       ]);
      //create a new message record in Database
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->messages = $request->input('message');
      $message->save();

      //redirect to contact page after submitting
      return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
    
}
