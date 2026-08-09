<section id="kontak" class="section">
    <div class="container">
        <div class="kontak__wrap" data-reveal>
            <div class="kontak__info">
                <span class="eyebrow"><i class="fa-solid fa-envelope-open-text"></i> Hubungi Kami</span>
                <h2 class="section__title">Ada Pertanyaan Seputar Jurusan RPL?</h2>
                <p class="section__desc">
                    Tim jurusan siap membantu menjawab pertanyaan seputar pendaftaran,
                    kurikulum, hingga program magang.
                </p>

                <ul class="kontak__list">
                    <li>
                        <span class="kontak__icon"><i class="fa-solid fa-location-dot"></i></span>
                        <div>
                            <strong>Alamat</strong>
                            <p>{{ $kontak['alamat'] }}</p>
                        </div>
                    </li>
                    <li>
                        <span class="kontak__icon"><i class="fa-solid fa-phone"></i></span>
                        <div>
                            <strong>Telepon</strong>
                            <p>{{ $kontak['telepon'] }}</p>
                        </div>
                    </li>
                    <li>
                        <span class="kontak__icon"><i class="fa-brands fa-whatsapp"></i></span>
                        <div>
                            <strong>WhatsApp</strong>
                            <p>{{ $kontak['whatsapp'] }}</p>
                        </div>
                    </li>
                    <li>
                        <span class="kontak__icon"><i class="fa-solid fa-envelope"></i></span>
                        <div>
                            <strong>Email</strong>
                            <p>{{ $kontak['email'] }}</p>
                        </div>
                    </li>
                    <li>
                        <span class="kontak__icon"><i class="fa-brands fa-instagram"></i></span>
                        <div>
                            <strong>Instagram</strong>
                            <p>{{ $kontak['instagram'] }}</p>
                        </div>
                    </li>
                </ul>
            </div>

            <form class="kontak__form" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan kamu telah terkirim (contoh tampilan, hubungkan ke backend jika diperlukan).');">
                <div class="form__group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" placeholder="Masukkan nama kamu" required>
                </div>
                <div class="form__group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="nama@email.com" required>
                </div>
                <div class="form__group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" rows="4" placeholder="Tulis pertanyaan kamu..." required></textarea>
                </div>
                <button type="submit" class="btn btn--primary btn--block">
                    Kirim Pesan <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>