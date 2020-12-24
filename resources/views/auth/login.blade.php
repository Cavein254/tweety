@extends('layouts.app')

@section('content')
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
 </p>
    <form action="/login" method="POST">
        @csrf
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email"id="">
        </div>

        <div class="">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" d="">
        </div>

        <div class="">
            <button type="submit">Register</button>
        </div>
    </form>
@endsection