<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src="/img/avator.svg" width="40px" class="rounded-full"  alt="avator">
     </div>
     <div class="">
         <h5 class="font-bold mb-2">{{$tweet->user->name}}</h5> 
         <p class="text-sm">
             {{$tweet->body}}
         </p>
     </div>
 </div>