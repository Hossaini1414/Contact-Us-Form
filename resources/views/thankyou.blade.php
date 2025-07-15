@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>contact us</title>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>


<body class="mx-auto font-font8 w-full  bg-slate-300 text-black h-screen">
    <div class="flex flex-col mx-auto text-center  min-h-max">
        <h1 class="text-3xl md:text-6xl text-center py-9 font-font6">Thank You!</h1>
        <p class="text-md md:text-2xl ">Your massage has been successfully sent. we appreciate you reaching out to us.
        </p>
        <p class="text-md md:text-2xl ">Our team will review your massage and get back to you as possible.</p>
        <p class="text-md md:text-3xl py-4 font-font5 ">Have a great day!</p>
        <div class="flex flex-row gap-3 justify-center mx-auto py-4">
            <a href="/contact" class="rounded-xl shadow-md border  p-2  px-6 bg-orange-400 hover:scale-110"><i
                    class="fas fa-arrow-left  "></i>
                Back</a>
        </div>

    </div>
</body>