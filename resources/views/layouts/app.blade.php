<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<section class="px-8 py-4">
    <header class="container mx-auto">
        <div class=" flex justify-items-center content-center">
            <div class="">
                <img src="/img/logo.png" alt="logo"  class="object-contain" width="100px">
            </div >
            <div class="text-3xl text-black-900 pt-5">
                Tweety
            </div>
        </div>
    </header>
</section>
<body>
<section class="px-8">
    <main class="container mx-auto">
    @yield('content')
    </main>
</section>

</body>

</html>