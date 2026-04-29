<div>
  <x-layout>
    <div class="bg-gray-900 py-24 sm:py-32">
      <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-xl">
          <h2 class="text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Tabel Siswa</h2>
          <p class="mt-6 text-lg/8 text-gray-400">We’re a dynamic group of individuals who are passionate about what we
            do and dedicated to delivering the best results for our clients.</p>
          <button type="button" id="createSiswaModalButton" data-modal-target="createSiswaModal"
            data-modal-toggle="createSiswaModal"
            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Tambah Siswa
          </button>
        </div>

      
<ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
  @foreach ($student as $murid)


    <li>
      <div class="flex items-center gap-x-6">
        <img
          src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
          alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
        <div>
          <div class="space-y-1">
            <h3 class="text-base font-semibold tracking-tight text-white">
              <a href="{{ route('siswa.show', $murid->id) }}">
                {{ $murid->nama_lengkap }}
              </a>
            </h3>

            <p class="text-sm font-medium text-indigo-400">
              {{ $murid->jurusan }}
            </p>

            <p class="text-sm font-medium text-indigo-500">
              {{ $murid->kelas }}
            </p>

            <p class="text-xs text-gray-400">
              Dibuat pada: {{ optional($murid->created_at)->format('d M Y') }}
            </p>
          </div>
        </div>
      </div>
    </li>

    
  @endforeach
</ul>
</div>
</div>
    <div id="createSiswaModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Siswa</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-target="createSiswaModal" data-modal-toggle="createSiswaModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class="col-span-2">
                            <label for="Nama Lengkap"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="Nama Lengkap"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Nama Lengkap" required="">
                        </div>
                        <div>
                            <label for="Kelas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input type="text" name="kelas" id="Kelas"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Kelas" required="">
                        </div>
                        <div>
                            <label for="Jurusan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                            <input type="text" name="jurusan" id="Jurusan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Input Jurusan" required="">
                        </div>

                

                    <button type="submit"
                        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Add Berita
                    </button>
                </form>
            </div>
        </div>
    </div>  
</x-layout>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</div>