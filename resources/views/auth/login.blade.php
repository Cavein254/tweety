@extends('layouts.app')

@section('content')
    <form action="/register" method="POST">
        @csrf
        <div class="">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your Name" id="">
        </div>

        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email"id="">
        </div>

        <div class="">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" d="">
        </div>

        <div class="">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" placeholder="confirm password"d="">
        </div>
        <div class="">
            <button type="submit">Register</button>
        </div>
    </form>
@endsection