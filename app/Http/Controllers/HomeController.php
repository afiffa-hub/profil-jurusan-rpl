<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ==== STATISTIK SINGKAT (ditampilkan di Beranda) ====
        $stats = [
            ['angka' => '200+', 'label' => 'Siswa Aktif'],
            ['angka' => '90%', 'label' => 'Alumni Terserap Kerja'],
            ['angka' => '5', 'label' => 'Tenaga Pengajar'],
            ['angka' => '15', 'label' => 'Tahun Berdiri'],
        ];

        // ==== VISI, MISI & KEUNGGULAN (Profil Jurusan) ====
        $misi = [
            'Menyelenggarakan pembelajaran rekayasa perangkat lunak berbasis proyek nyata (project based learning).',
            'Membekali siswa dengan kompetensi pemrograman, basis data, dan desain antarmuka yang relevan dengan industri.',
            'Menjalin kerja sama dengan perusahaan teknologi untuk praktik kerja lapangan dan sertifikasi kompetensi.',
            'Menumbuhkan jiwa problem-solving, kolaborasi tim, dan etos kerja profesional sejak dini.',
        ];

        $keunggulan = [
            [
                'ikon' => 'laptop-code',
                'judul' => 'Kurikulum Berbasis Industri',
                'deskripsi' => 'Materi disusun bersama praktisi IT dan diperbarui mengikuti kebutuhan pasar kerja terkini.',
            ],
            [
                'ikon' => 'users',
                'judul' => 'Mentor Berpengalaman',
                'deskripsi' => 'Diampu oleh guru bersertifikasi dengan pengalaman industri di bidang software development.',
            ],
            [
                'ikon' => 'briefcase',
                'judul' => 'Praktik Kerja Industri',
                'deskripsi' => 'Program magang di perusahaan teknologi mitra selama satu semester penuh.',
            ],
            [
                'ikon' => 'trophy',
                'judul' => 'Segudang Prestasi',
                'deskripsi' => 'Aktif mengikuti dan menjuarai kompetisi LKS, hackathon, dan lomba coding tingkat nasional.',
            ],
        ];

        // ==== DAFTAR MATA PELAJARAN / KOMPETENSI ====
        $mataPelajaran = [
            [
                'kode' => 'RPL-101',
                'nama' => 'Pengembangan Gim',
                'deskripsi' => 'Merancang dan membangun game sederhana hingga menengah, mulai dari konsep, aset, sampai logika permainan.',
                'ikon' => 'gamepad',
            ],
            [
                'kode' => 'RPL-102',
                'nama' => 'Desain UI/UX',
                'deskripsi' => 'Prinsip user-centered design, wireframing, dan prototyping interaktif menggunakan Figma.',
                'ikon' => 'pen-nib',
            ],
            [
                'kode' => 'RPL-103',
                'nama' => 'Basis Data (Database)',
                'deskripsi' => 'Perancangan ERD, normalisasi, query SQL, hingga pengelolaan basis data MySQL & PostgreSQL.',
                'ikon' => 'database',
            ],
            [
                'kode' => 'RPL-104',
                'nama' => 'Algoritma & Pemrograman',
                'deskripsi' => 'Fondasi logika pemrograman, struktur data, dan alur kerja pengembangan perangkat lunak.',
                'ikon' => 'code',
            ],
            [
                'kode' => 'RPL-105',
                'nama' => 'Cloud Computing & Engineer',
                'deskripsi' => 'Konsep layanan cloud, deployment aplikasi, serta pengelolaan infrastruktur berbasis cloud.',
                'ikon' => 'cloud',
            ],
            [
                'kode' => 'RPL-106',
                'nama' => 'Dasar Infrastruktur IT',
                'deskripsi' => 'Pengenalan perangkat keras, sistem operasi, dan komponen dasar infrastruktur teknologi informasi.',
                'ikon' => 'server',
            ],
            [
                'kode' => 'RPL-107',
                'nama' => 'Network Engineer',
                'deskripsi' => 'Konsep jaringan komputer, konfigurasi perangkat jaringan, dan administrasi topologi jaringan.',
                'ikon' => 'network-wired',
            ],
            [
                'kode' => 'RPL-108',
                'nama' => 'Teknisi Komputer',
                'deskripsi' => 'Praktik perakitan, instalasi, perawatan, dan troubleshooting perangkat keras & lunak komputer.',
                'ikon' => 'screwdriver-wrench',
            ],
            [
                'kode' => 'RPL-109',
                'nama' => 'IT Support & Operator',
                'deskripsi' => 'Penanganan masalah teknis pengguna, pengoperasian sistem, dan dukungan layanan IT sehari-hari.',
                'ikon' => 'headset',
            ],
            [
                'kode' => 'RPL-110',
                'nama' => 'System Administrator',
                'deskripsi' => 'Pengelolaan server, akun pengguna, hak akses, dan pemeliharaan sistem agar berjalan optimal.',
                'ikon' => 'user-gear',
            ],
            [
                'kode' => 'RPL-111',
                'nama' => 'Cyber Security',
                'deskripsi' => 'Prinsip keamanan sistem, proteksi data, dan penanganan ancaman siber pada aplikasi & jaringan.',
                'ikon' => 'shield-halved',
            ],
        ];

        // ==== PELUANG KERJA ====
        $peluangKerja = [
            ['ikon' => 'laptop-code', 'nama' => 'Software Engineer & Konsultan IT', 'deskripsi' => 'Merancang & membangun aplikasi perangkat lunak sekaligus memberi solusi teknologi bagi klien.'],
            ['ikon' => 'gamepad', 'nama' => 'Game, Web, Mobile App Developer', 'deskripsi' => 'Mengembangkan game, website, hingga aplikasi Android & iOS untuk berbagai kebutuhan.'],
            ['ikon' => 'database', 'nama' => 'Database Administrator', 'deskripsi' => 'Mengelola, mengamankan, dan mengoptimalkan sistem basis data perusahaan.'],
            ['ikon' => 'pen-nib', 'nama' => 'UI/UX Designer & Software House', 'deskripsi' => 'Merancang pengalaman & antarmuka pengguna, atau bekerja di industri software house.'],
            ['ikon' => 'headset', 'nama' => 'IT Support & System Administrator', 'deskripsi' => 'Menangani dukungan teknis pengguna sekaligus mengelola server dan sistem perusahaan.'],
            ['ikon' => 'network-wired', 'nama' => 'Network Engineer', 'deskripsi' => 'Merancang, mengonfigurasi, dan memelihara infrastruktur jaringan komputer.'],
            ['ikon' => 'shield-halved', 'nama' => 'Cyber Security Engineer', 'deskripsi' => 'Melindungi sistem dan data perusahaan dari ancaman serta serangan siber.'],
            ['ikon' => 'tower-broadcast', 'nama' => 'Telecomunication Analyst', 'deskripsi' => 'Menganalisis dan mengelola sistem komunikasi data pada jaringan telekomunikasi.'],
            ['ikon' => 'server', 'nama' => 'Data Center Technician', 'deskripsi' => 'Memastikan operasional dan perawatan perangkat pada pusat data berjalan optimal.'],
            ['ikon' => 'drafting-compass', 'nama' => 'Architect', 'deskripsi' => 'Merancang arsitektur sistem dan infrastruktur teknologi skala besar.'],
            ['ikon' => 'rocket', 'nama' => 'System Wirausaha IT', 'deskripsi' => 'Membangun usaha sendiri di bidang teknologi, dari jasa IT hingga produk digital.'],
        ];

        // ==== DATA GURU ====
        $guru = [
            ['nama' => 'Annia Devalusiani, S.Pd. M.Pd.', 'jabatan' => 'Kepala Jurusan RPL', 'foto' => 'guru1.jpg'],
            ['nama' => 'Taufik Dzikri Pangestu, S.Kom.', 'jabatan' => 'Guru Pemrograman Web', 'foto' => 'guru2.jpg'],
            ['nama' => 'Retno Novia Andriani, S.Kom.', 'jabatan' => 'Guru Basis Data', 'foto' => 'guru3.jpg'],
            ['nama' => 'Yani Yulianti, S.Kom.', 'jabatan' => 'Guru Pemrograman', 'foto' => 'guru4.jpg'],
            ['nama' => 'Rizal Suyaman, S.Kom.', 'jabatan' => 'Guru Jaringan', 'foto' => 'guru5.jpg'],
        ];

        // ==== KONTAK ====
        $kontak = [
            'alamat' => 'Jl. Arief Rahman Hakim No.35, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41213',
            'telepon' => '(0260) 7775-775',
            'whatsapp' => '0812-7775-775',
            'email' => 'rpl@smk-contoh.sch.id',
            'instagram' => '@rpl.smkcontoh',
        ];

        return view('home', compact(
            'stats',
            'misi',
            'keunggulan',
            'mataPelajaran',
            'peluangKerja',
            'guru',
            'kontak'
        ));
    }
}
