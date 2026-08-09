<section id="mata-pelajaran" class="section">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow"><i class="fa-solid fa-book-open"></i> Kurikulum</span>
            <h2 class="section__title">Mata Pelajaran &amp; Kompetensi</h2>
            <p class="section__desc">
                Kompetensi inti yang dipelajari siswa RPL dari kelas X hingga XII,
                disusun berjenjang mulai dari dasar pemrograman hingga produk siap pakai.
            </p>
        </div>

        <div class="mapel__grid">
            @foreach ($mataPelajaran as $mapel)
            <div class="mapel__card" data-reveal>
                <div class="mapel__top">
                    <div class="mapel__icon"><i class="fa-solid fa-{{ $mapel['ikon'] }}"></i></div>
                    <span class="mapel__kode">{{ $mapel['kode'] }}</span>
                </div>
                <h4 class="mapel__nama">{{ $mapel['nama'] }}</h4>
                <p class="mapel__desc">{{ $mapel['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>