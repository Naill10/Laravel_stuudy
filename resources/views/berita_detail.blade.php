<x-layout>

    <div class="bg-gray-900 min-h-screen pt-20">

        <!-- Hero Image -->
        <!-- <div class=" top-0 left-0 w-full z-50 bg-black/50 backdrop-blur-md">
            <img src="/upload/{{ $post->image }}" 
                 class="w-full h-full object-cover opacity-80">
        </div> -->

        <!-- Content -->
        <div class="max-w-4xl mx-auto px-6 py-10">

            <!-- Judul -->
            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                {{ $post->judul }}
            </h1>

            <!-- Meta -->
            <div class="flex items-center gap-4 mt-4 text-gray-400 text-sm">
                <span class="bg-gray-800 px-3 py-1 rounded-full">
                    ✍️ {{ $post->author }}
                </span>

                <span>
                    🗓 {{ $post->created_at->format('d M Y') }}
                </span>
            </div>

            <!-- Garis -->
            <div class="border-t border-gray-700 my-6"></div>

            <!-- Isi Berita -->
            <div class="text-gray-300 text-lg leading-relaxed space-y-4">
                <p>
                   {{ $post->isi_berita }}
                </p>
            </div>

            <!-- Tombol -->
            <div class="mt-10 flex gap-4">
                <a href="/berita" 
                   class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">
                   ⬅ Kembali
                </a>


            </div>

        </div>

    </div>

</x-layout>