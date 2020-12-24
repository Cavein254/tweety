@extends('layouts.app')

@section('content')
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('__sidebar-links')  
    </div>  
    <div class="lg:flex-1 lg:mx-10">
        <div class="border border-blue-500 rounded-lg px-8 py-6">
            <form action="" method="post"> 
                <textarea 
                class="w-full" 
                name="body" 
                placeholder="write something intresting"></textarea>
                <hr class="my-4">
                <footer class="flex justify-between ">
                    <div class="">
                        <img src="/img/avator.svg" width="40px" class="rounded-full"  alt="avator">
                    </div>
                    <div class="">
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweety</button>
                    </div>
                </footer>
            </form>
        </div>
        <div class="">

        </div>
    </div>
    <div class="lg:w-1/6">
        @include('__friends-list')
    </div>
</div>
@endsection