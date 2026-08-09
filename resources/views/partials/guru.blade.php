<section id="guru" class="section section--tint">
    <div class="container">
        <div class="section__head" data-reveal>
            <span class="eyebrow"><i class="fa-solid fa-chalkboard-user"></i> Tenaga Pengajar</span>
            <h2 class="section__title">Data Guru Jurusan RPL</h2>
            <p class="section__desc">
                Dibimbing langsung oleh guru bersertifikasi dengan pengalaman mengajar
                dan praktik industri di bidang pengembangan perangkat lunak.
            </p>
        </div>

        <div class="guru__grid">
            @foreach ($guru as $g)
            <div class="guru__card" data-reveal>
                <div class="guru__photo-wrap">
                    <img
                        src="{{ asset('images/guru/' . $g['foto']) }}"
                        onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode($g['nama']) }}&background=0A1A3C&color=fff&size=256&font-size=0.36&bold=true';"
                        alt="Foto {{ $g['nama'] }}"
                        class="guru__photo"
                        loading="lazy">
                </div>
                <h4 class="guru__nama">{{ $g['nama'] }}</h4>
                <p class="guru__jabatan">{{ $g['jabatan'] }}</p>
            </div>
            @endforeach
        </div>

        <p class="guru__note">
            <i class="fa-solid fa-circle-info"></i>
            Ganti foto asli guru di folder <code>public/images/guru/</code> — jika foto belum ada,
            sistem otomatis menampilkan avatar inisial nama.
        </p>
    </div>
</section>