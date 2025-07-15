<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>contact us</title>
  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
</head>

<body class="bg-slate-300">
  <section class="text-gray-600 body-font relative  ">
    <div class="container p-5 px-10 mx-auto w-1/2 mt-10 bg-white  rounded-3xl shadow-gray-500 shadow-xl">
      <div class="flex flex-col text-center w-full mb-12 mt-5">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Get in touch with Us <i
            class="fas fa-headset"></i></h1>
        <p>Have any questions, feedback, or just want to say hello?<br>
          Fill out the form below and we1'll get back to you as soon as possible.</p>
      </div>
      <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        <div class=" mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600 pl-2"><i class="fas fa-user"></i> Name</label>
                <input type="text" id="name" name="name"
                  class="rounded-xl w-full bg-gray-100 bg-opacity-50  border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  placeholder="name....." />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600 pl-2"><i class="fa-solid fa-envelope"></i>
                  Email</label>
                <input type="email" id="email" name="email"
                  class="w-full bg-gray-100 bg-opacity-50 rounded-xl border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  placeholder="email......" />
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600 pl-2"><i class="fa-solid fa-comment"></i>
                  Message</label>
                <textarea id="message" name="message"
                  class="w-full bg-gray-100 bg-opacity-50 rounded-xl border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                  placeholder="your Message....."></textarea>
              </div>
            </div>
            <div class="p-2 w-full flex flex-row gap-5 ">
              <button type="submit"
                class="flex w-1/2 text-white justify-center rounded-xl bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600  text-lg">Send</button>
              <button type="reset"
                class="flex w-1/2 text-white justify-center rounded-xl bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600  text-lg">Clear</button>
            </div>
          </div>
      </form>

    </div>
    </div>
  </section>
</body>

</html>