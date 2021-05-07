@extends('layout.app')


    @section('content')
        <h1>Messages</h1>
       @if (count($messages)>0)
           @foreach ($messages as $message )
           <ul class="list-group">
               <li class="list-group-item"><strong>Senders Name </strong>{{$message->name}} <br>
               <strong>Senders Email </strong>{{$message->email}}<br>
               <strong>Message from Sender </strong>{{$message->messages}}<br></li>
           </ul>
               
           @endforeach
       @endif
    @endsection

    @section('sidebar')
    @parent
    <h2>this is new appended sidebar</h2>
   
    @endsection
    
 

