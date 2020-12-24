  <h1 class="font-bold text-xl mb-3 ">Friends</h1>

  @foreach (range(1,8) as $item)
    <ul>
        <li class="mb-4">
            <div class="flex items-center mr-2 text-sm">
                <img src="/img/avator.svg" width="40px" class="rounded-full"  alt="avator">
                John Doe 
            </div> 
        </li>
    </ul>      
  @endforeach