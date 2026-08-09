<section id="beranda" class="hero">
    <div class="hero__bg">
        <div class="hero__grid"></div>
        <div class="hero__glow hero__glow--one"></div>
        <div class="hero__glow hero__glow--two"></div>
    </div>

    <div class="container hero__inner">
        <div class="hero__content" data-reveal>
            <span class="eyebrow"><i class="fa-solid fa-code-branch"></i> Kompetensi Keahlian</span>
            <h1 class="hero__title">
                Membangun Masa Depan Lewat <span class="text-gradient">Baris Kode</span>
            </h1>
            <p class="hero__desc">
                Jurusan Rekayasa Perangkat Lunak (RPL) menyiapkan generasi pengembang
                perangkat lunak yang siap kerja maupun siap wirausaha mulai dari
                pemrograman, basis data, hingga desain antarmuka yang digunakan
                jutaan pengguna setiap hari.
            </p>
            <div class="hero__actions">
                <a href="#profil" class="btn btn--primary">Kenali Jurusan Kami <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#mata-pelajaran" class="btn btn--ghost">Lihat Mata Pelajaran</a>
            </div>

            <div class="hero__stats">
                @foreach ($stats as $item)
                <div class="hero__stat">
                    <span class="hero__stat-num">{{ $item['angka'] }}</span>
                    <span class="hero__stat-label">{{ $item['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="hero__visual" data-reveal>
            <div class="terminal">
                <div class="terminal__bar">
                    <span class="dot dot--red"></span>
                    <span class="dot dot--yellow"></span>
                    <span class="dot dot--green"></span>
                    <span class="terminal__title">rpl@jurusan: ~/portofolio</span>
                </div>
                <div class="terminal__body">
                    <pre><code id="typingCode"></code><span class="terminal__cursor">&nbsp;</span></pre>
                </div>
            </div>

            <div class="floating-tag floating-tag--1"><i class="fa-solid fa-database"></i> MySQL</div>
            <div class="floating-tag floating-tag--2"><i class="fa-brands fa-laravel"></i> Laravel</div>
            <div class="floating-tag floating-tag--3"><i class="fa-brands fa-figma"></i> UI/UX</div>
        </div>
    </div>

    <a href="#profil" class="hero__scroll" aria-label="Gulir ke bawah">
        <span></span>
    </a>
</section>