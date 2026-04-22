<div>
   <x-layout>
    <div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Tabel Siswa</h2>
      <p class="mt-6 text-lg/8 text-gray-400">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
     @foreach ($student as $murid)
     
     
      <li>
        <div class="flex items-center gap-x-6">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
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

   </x-layout>
</div>
