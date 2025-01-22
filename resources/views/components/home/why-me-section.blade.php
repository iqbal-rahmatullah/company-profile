@php
    $list_feature = [
        [
            'icon' => 'https://cdn-icons-png.flaticon.com/512/4341/4341139.png',
            'title' => 'Tim Profesional',
            'description' => 'Kami memiliki tim yang terdiri dari para profesional yang berpengalaman dan berdedikasi tinggi.'
        ],
        [
            'icon' => 'https://cdn-icons-png.flaticon.com/512/4341/4341134.png',
            'title' => 'Bukti Validasi Layanan melalui Sertifikat Assessment',
            'description' => 'Sertifikat ini dapat digunakan sebagai bukti bahwa assessment telah dilakukan terhadap layanan dan dapat dilampirkan dalam pelaporan audit internal maupun eksternal.'
        ],
        [
            'icon' => 'https://cdn-icons-png.flaticon.com/512/4341/4341160.png',
            'title' => 'Pelaporan dan Konsultasi yang Detail',
            'description' => 'Tim memastikan memberikan pelaporan terperinci dan konsultasi terbuka untuk memastikan Anda selangkah di depan terhdapa ancaman hacker dan membuat keputusan yang tepat dalam mengurangi risiko bisnis.'
        ],
        [
            'icon' => 'https://cdn-icons-png.flaticon.com/512/4341/4341025.png',
            'title' => 'Mendapatkan report dan konsultasi terbuka berkaitan dengan hasil penetration testing',
            'description' => 'Kami mengadopsi teknik agile dalam melakukan security auditing untuk memastikan komunikasi berjalan secara dua arah. Sehingga, tidak perlu menunggu laporan penuh untuk menutup celah keamanan yang terdeteksi.'
        ],
    ]
@endphp
<div id="features">
    <x-container>
        <div class="md:w-2/3 lg:w-1/2">
            <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
                Kenapa Kami?
            </h2>
            <p class="text-gray-600 dark:text-gray-300">Kami hadir dengan komitmen untuk memberikan layanan terbaik yang
                mengutamakan kualitas, kepercayaan,
                dan inovasi. Dengan pengalaman yang luas dan dedikasi tinggi, kami selalu berusaha untuk memenuhi
                kebutuhan Anda melalui solusi yang efisien dan bernilai. Pilih kami untuk pengalaman yang unggul dan
                kepuasan yang terjamin.</p>
        </div>
        <div
            class="mt-16 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4"
        >
            @foreach ($list_feature as $feature)
                <div
                    class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                        <img
                            src={{ $feature['icon'] }}
                            class="w-12"
                            width="512"
                            height="512"
                            alt="burger illustration"
                        />

                        <div class="space-y-2">
                            <h5
                                class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                            >
                                {{ $feature['title'] }}
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                       
                    </div>
                </div>
            @endforeach
        </div>
</div>
</x-container>
</div>
