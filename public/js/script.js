document.addEventListener('DOMContentLoaded', function () {

    /* =========================================================
       1. Navbar: solid background saat discroll
       ========================================================= */
    const navbar = document.getElementById('navbar');
    const onScrollNavbar = () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
    onScrollNavbar();
    window.addEventListener('scroll', onScrollNavbar, { passive: true });

    /* =========================================================
       2. Menu mobile toggle
       ========================================================= */
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
    });
    navMenu.querySelectorAll('.nav-link').forEach((link) => {
        link.addEventListener('click', () => navMenu.classList.remove('open'));
    });

    /* =========================================================
       3. Scrollspy: highlight menu sesuai section aktif
       ========================================================= */
    const sections = document.querySelectorAll('main section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const spyObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach((link) => {
                    link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                });
            }
        });
    }, { rootMargin: '-45% 0px -50% 0px', threshold: 0 });

    sections.forEach((section) => spyObserver.observe(section));

    /* =========================================================
       4. Reveal-on-scroll untuk elemen [data-reveal]
       ========================================================= */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('is-visible'), index * 60);
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('[data-reveal]').forEach((el) => revealObserver.observe(el));

    /* =========================================================
       5. Efek mengetik (typing) di terminal hero
       ========================================================= */
    const typingEl = document.getElementById('typingCode');
    if (typingEl) {
        const codeLines = [
            'class Siswa extends Jurusan',
            '{',
            '    protected $jurusan = "RPL";',
            '',
            '    public function keahlian(): array',
            '    {',
            '        return [',
            '            "Web Development",',
            '            "Mobile Apps",',
            '            "UI/UX Design",',
            '            "Database"',
            '        ];',
            '    }',
            '}'
        ];

        const fullText = codeLines.join('\n');
        let charIndex = 0;
        let isDeleting = false;

        function typeLoop() {
            if (!isDeleting) {
                charIndex++;
                typingEl.textContent = fullText.slice(0, charIndex);
                if (charIndex === fullText.length) {
                    isDeleting = false;
                    setTimeout(() => { isDeleting = true; typeLoop(); }, 2200);
                    return;
                }
                setTimeout(typeLoop, 22);
            } else {
                charIndex -= 3;
                if (charIndex < 0) charIndex = 0;
                typingEl.textContent = fullText.slice(0, charIndex);
                if (charIndex === 0) {
                    isDeleting = false;
                    setTimeout(typeLoop, 500);
                    return;
                }
                setTimeout(typeLoop, 8);
            }
        }
        typeLoop();
    }

    /* =========================================================
       6. Counter animasi untuk statistik hero (angka numerik)
       ========================================================= */
    const statNums = document.querySelectorAll('.hero__stat-num');
    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const raw = el.textContent.trim();
            const match = raw.match(/^(\d+)(.*)$/);
            if (match) {
                const target = parseInt(match[1], 10);
                const suffix = match[2];
                let current = 0;
                const step = Math.max(1, Math.ceil(target / 40));
                const tick = () => {
                    current += step;
                    if (current >= target) {
                        el.textContent = target + suffix;
                    } else {
                        el.textContent = current + suffix;
                        requestAnimationFrame(tick);
                    }
                };
                tick();
            }
            countObserver.unobserve(el);
        });
    }, { threshold: 0.6 });

    statNums.forEach((el) => countObserver.observe(el));

});
