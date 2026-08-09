<section id="profil" class="section section--tint">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow"><i class="fa-solid fa-building-columns"></i> Tentang Kami</span>
            <h2 class="section__title">Profil Jurusan Rekayasa Perangkat Lunak</h2>
            <p class="section__desc">
                RPL adalah kompetensi keahlian yang mempelajari proses perancangan, pengembangan,
                dan pemeliharaan perangkat lunak — dari aplikasi web, mobile, hingga sistem
                enterprise — dengan pendekatan belajar sambil membangun proyek nyata.
            </p>
        </div>

        <div class="profil__grid">
            <div class="profil__card profil__card--visi" data-reveal>
                <div class="profil__icon"><i class="fa-solid fa-eye"></i></div>
                <h3>Visi</h3>
                <p>
                    Menjadi kompetensi keahlian unggulan yang menghasilkan lulusan kompeten,
                    adaptif terhadap perkembangan teknologi, dan berdaya saing di industri
                    perangkat lunak nasional maupun global.
                </p>
            </div>

            <div class="profil__card profil__card--misi" data-reveal>
                <div class="profil__icon"><i class="fa-solid fa-bullseye"></i></div>
                <h3>Misi</h3>
                <ul class="profil__list">
                    @foreach ($misi as $item)
                    <li><i class="fa-solid fa-check"></i> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="keunggulan__grid">
            @foreach ($keunggulan as $item)
            <div class="keunggulan__card" data-reveal>
                <div class="keunggulan__icon"><i class="fa-solid fa-{{ $item['ikon'] }}"></i></div>
                <h4>{{ $item['judul'] }}</h4>
                <p>{{ $item['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>