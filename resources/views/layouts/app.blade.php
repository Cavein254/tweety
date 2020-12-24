<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<section class="px-8 py-4">
    <header class="container mx-auto">
        <div class="">
            <div class="">
                <img src="/img/logo.png" alt="logo" >
            </div >
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