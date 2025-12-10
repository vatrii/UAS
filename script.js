/* ----------------------------------------------------
 * 1. Initialize Icons
 * ---------------------------------------------------- */
lucide.createIcons();

/* ----------------------------------------------------
 * 2. Navbar Scroll Effect
 * ---------------------------------------------------- */
const navbar = document.getElementById('navbar');
const logoText = document.querySelector('.logo-container');
const navLinks = document.querySelector('.nav-links');
const menuIcon = document.getElementById('menuIcon');

window.addEventListener('scroll', () => {
    const scrolled = window.scrollY > 50;

    if (scrolled) {
        navbar.classList.remove('bg-transparent', 'text-white', 'py-5');
        navbar.classList.add(
            'bg-white/95',
            'backdrop-blur-md',
            'shadow-md',
            'py-3',
            'text-slate-900'
        );
    } else {
        navbar.classList.add('bg-transparent', 'text-white', 'py-5');
        navbar.classList.remove(
            'bg-white/95',
            'backdrop-blur-md',
            'shadow-md',
            'py-3',
            'text-slate-900'
        );
    }
});

/* ----------------------------------------------------
 * 3. Mobile Menu Toggle
 * ---------------------------------------------------- */
const mobileMenu = document.getElementById('mobileMenu');

function toggleMobileMenu() {
    mobileMenu.classList.toggle('hidden');
}

/* ----------------------------------------------------
 * 4. Modal Logic
 * ---------------------------------------------------- */
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle('hidden');
}

/* ----------------------------------------------------
 * 5. Curriculum Tabs Logic (Dynamic Content)
 * ---------------------------------------------------- */
const curriculumData = [
    {
        semester: "Semester 1",
        subjects: [
            "Pengantar TI",
            "Logika Algoritma",
            "Matematika Diskrit",
            "English for IT",
            "Character Building"
        ]
    },
    {
        semester: "Semester 2",
        subjects: [
            "Struktur Data",
            "Basis Data Relasional",
            "Game Design Fundamental",
            "Web Programming I"
        ]
    },
    {
        semester: "Semester 3",
        subjects: [
            "Statistika",
            "Sistem Infromasi Manajemen",
            "Implementasi Basis Data",
            "Jaringan Komputer",
            "Pemrograman Berorientasi Obyek"
        ]
    },
    {
        semester: "Semester 4",
        subjects: [
            "Penulisan Kreatif",
            "Technopreneurship",
            "Etika Profesi",
            "Magang Industri"
        ]
    },
        {
        semester: "Semester 5",
        subjects: [
            "Teknologi Baru dan Inovasi Sistem Informasi",
            "Manajemen Proyek",
            "Sains Data",
            "Kecerdasan Bisnis"
        ]
    },
        {
        semester: "Semester 6",
        subjects: [
            "Analisa dan Perancangan Sistem Informasi",
            "Perencanaan Sumber Daya Perusahaan",
            "Visualisasi Data",
            "Magang Industri"
        ]
    },
        {
        semester: "Semester 7",
        subjects: [
            "Proyek Akhir (Skripsi)",
            "Technopreneurship",
            "Etika Profesi",
            "Magang Industri"
        ]
    }
];

function renderCurriculum(index) {
    const container = document.getElementById('curriculumContent');
    const subjects = curriculumData[index].subjects;

    let html = '';

    subjects.forEach((subject, idx) => {
        html += `
            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100 animate-[fadeInUp_0.3s_ease-out]">
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">
                    ${idx + 1}
                </div>
                <span class="font-semibold text-slate-700">${subject}</span>
            </div>
        `;
    });

    container.innerHTML = html;
}

function switchTab(index) {
    const buttons = document.querySelectorAll('.tab-btn');

    // Update active button
    buttons.forEach(btn => {
        const btnIndex = parseInt(btn.dataset.index);

        if (btnIndex === index) {
            btn.className =
                "tab-btn px-6 py-2 rounded-full font-medium transition-all bg-slate-900 text-white shadow-lg";
        } else {
            btn.className =
                "tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200";
        }
    });

    // Render subjects for selected semester
    renderCurriculum(index);
}
