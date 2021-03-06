@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-1/6">
        @include('__sidebar-links')  
    </div>  
    <div class="lg:flex-1 lg:mx-10 " style="max-width:700px">
        @include('__published-tweet-panel  ')
        <div class="border border-gray-300 rounded-lg">
            @foreach ($tweets as $tweet)
             @include('__tweet')
            @endforeach
        </div> 
    </div>
    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('__friends-list')
    </div>
</div>
@endsection