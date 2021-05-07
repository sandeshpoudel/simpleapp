@extends('layout.app')

    @section('content')
        <h1>Contact</h1>
        <form action="/contact/submit" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" value="Ron Doe"class="form-control">
            
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" value="ron@doe.com" class="form-control">
           
        </div>
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">Ron Doe message</textarea>
            
        </div>
        <div><button type="submit" class="btn btn-primary">Send Message! </button></div>
        
        </form>
    @endsection

    @section('sidebar')
   
    <div class="well">
        <h3>Contact page sidebar</h3>
    </div>
    @endsection