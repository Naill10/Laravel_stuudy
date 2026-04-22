<x-layout>
    <!-- Isi Halaman Beranda -->

  <body class="bg-gray-900">

    <div class="relative isolate min-h-screen flex items-center px-6 lg:px-8 overflow-hidden">

      <!-- BACKGROUND BLUR -->
      <div aria-hidden="true" class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute left-1/2 top-[-20%] w-[60rem] -translate-x-1/2 rotate-30 blur-3xl opacity-20
          bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%)">
        </div>
      </div>

      <!-- CONTENT GRID -->

      <div class="mx-auto w-full max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <!-- LEFT -->
        <div class="max-w-xl">
          <h2 class="text-4xl sm:text-5xl font-semibold text-white">
            Contact sales
          </h2>
          <p class="mt-4 text-lg text-gray-400">
            Aute magna irure deserunt veniam aliqua magna enim voluptate.
          </p>

          <p class="mt-6 text-gray-300">
            Let’s build something great together. Fill the form and we’ll get back to you.
          </p>
        </div>

        <!-- RIGHT (FORM) -->
        <form action="#" method="POST" class="w-full max-w-xl">

          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

            <div>
              <label class="block text-sm font-semibold text-white">First name</label>
              <input type="text" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500">
            </div>

            <div>
              <label class="block text-sm font-semibold text-white">Last name</label>
              <input type="text" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500">
            </div>

            <div class="sm:col-span-2">
              <label class="block text-sm font-semibold text-white">Company</label>
              <input type="text" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500">
            </div>

            <div class="sm:col-span-2">
              <label class="block text-sm font-semibold text-white">Email</label>
              <input type="email" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500">
            </div>

            <div class="sm:col-span-2">
              <label class="block text-sm font-semibold text-white">Phone</label>
              <input type="text" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500">
            </div>

            <div class="sm:col-span-2">
              <label class="block text-sm font-semibold text-white">Message</label>
              <textarea rows="4" class="mt-2 w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10 focus:outline-indigo-500"></textarea>
            </div>

          </div>

          <button type="submit"
            class="mt-10 w-full rounded-md bg-indigo-500 py-2.5 font-semibold text-white hover:bg-indigo-400">
            Let's talk
          </button>

        </form>

      </div>
    </div>




  </body>
</html>
</x-layout>