<section id="peluang-kerja" class="section section--dark">
    <div class="hero__grid hero__grid--dark"></div>

    <div class="container">
        <div class="section__head section__head--light" data-reveal>
            <span class="eyebrow eyebrow--light"><i class="fa-solid fa-briefcase"></i> Prospek Karier</span>
            <h2 class="section__title section__title--light">Peluang Kerja Lulusan RPL</h2>
            <p class="section__desc section__desc--light">
                Bekal kompetensi yang lengkap membuka banyak jalur karier di industri
                teknologi, baik sebagai karyawan, freelancer, maupun wirausahawan digital.
            </p>
        </div>

        <div class="karier__grid">
            @foreach ($peluangKerja as $karier)
            <div class="karier__card" data-reveal>
                <div class="karier__icon"><i class="fa-solid fa-{{ $karier['ikon'] }}"></i></div>
                <h4>{{ $karier['nama'] }}</h4>
                <p>{{ $karier['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>