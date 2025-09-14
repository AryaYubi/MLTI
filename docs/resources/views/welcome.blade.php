<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Putu Arya Yubi Wirayudha - My ITSM Journey</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans text-gray-800">

    <div class="container mx-auto max-w-4xl p-8">

        <header class="flex justify-between items-center border-b pb-4 mb-12">
            <h1 class="text-2xl font-bold">Putu Arya Yubi Wirayudha - 5026231165</h1>
            <nav>
                <a href="#" class="text-lg font-medium hover:text-blue-600">My ITSM Journey</a>
            </nav>
        </header>

        <main>
            <h2 class="text-4xl font-bold mb-4">My ITSM Journey</h2>
            <h3 class="text-2xl font-semibold text-gray-600 mb-10">Posts</h3>

            <div class="space-y-8">
                {{-- Kita akan loop data postingan dari controller di sini --}}
                @foreach ($posts as $post)
                    <article>
                        <p class="text-sm text-gray-500">{{ $post['date'] }}</p>
                        <a href="{{ asset($post['url']) }}" target="_blank" rel="noopener noreferrer" class="text-2xl text-blue-700 hover:underline">
                            {{ $post['title'] }}
                        </a>
                    </article>
                @endforeach
            </div>


        </main>

        <footer class="mt-20 border-t pt-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <h4 class="text-xl font-bold">Putu Arya Yubi Wirayudha</h4>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600">
                       Selamat datang di portofolio digital saya untuk mata kuliah Manajemen Layanan TI (ITSM). Portofolio ini berfungsi sebagai dokumentasi proses belajar dan perkembangan saya selama satu semester, yang menampilkan kumpulan tugas dan proyek.
                    </p>
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
