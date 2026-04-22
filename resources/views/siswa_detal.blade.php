<x-layout>

<div class="bg-gray-900 min-h-screen flex items-center justify-center p-6">

    <div class="bg-gray-800 rounded-2xl shadow-xl max-w-2xl w-full p-8">

        <!-- Header -->
        <div class="flex items-center gap-6">
            
            <!-- Foto (opsional) -->
            <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center text-2xl text-white">
                👤
            </div>

            <!-- Nama -->
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white">
                    {{ $post->nama_lengkap }}
                </h1>
                <p class="text-gray-400 text-sm">
                    Data Siswa
                </p>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 my-6"></div>

        <!-- Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-300">

            <div>
                <p class="text-sm text-gray-400">Jurusan</p>
                <p class="text-lg font-semibold">{{ $post->jurusan }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-400">Kelas</p>
                <p class="text-lg font-semibold">{{ $post->kelas }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-400">Tanggal Dibuat</p>
                <p class="text-lg font-semibold">
                    {{ $post->created_at ? $post->created_at->format('d M Y') : '-' }}
                </p>
            </div>

        </div>

        <!-- Button -->
        <div class="mt-8">
            <a href="/siswa" 
               class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2 rounded-lg">
               ⬅ Kembali
            </a>
        </div>

    </div>

</div>

</x-layout>