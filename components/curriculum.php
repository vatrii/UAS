<section id="curriculum" class="py-20 bg-slate-50">
    <div class="max-w-5xl mx-auto px-4">
        <div class="text-center mb-12 fade-in-up">
            <h3 class="text-blue-600 font-bold uppercase tracking-wider text-xl mb-2">Struktur Kurikulum</h3>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Peta Pembelajaran</h2>
            <div class="h-1 w-20 bg-orange-500 mt-4 mx-auto rounded-full"></div>
        </div>

        <div class="flex flex-wrap justify-center gap-2 mb-8 fade-in-up delay-100" id="curriculumTabs">
            <button onclick="switchTab(0)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-slate-900 text-white shadow-lg" data-index="0">Semester 1</button>
            <button onclick="switchTab(1)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="1">Semester 2</button>
            <button onclick="switchTab(2)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="2">Semester 3</button>
            <button onclick="switchTab(3)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="3">Semester 4</button>
            <button onclick="switchTab(4)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="4">Semester 5</button>
            <button onclick="switchTab(5)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="5">Semester 6</button>
            <button onclick="switchTab(6)" class="tab-btn px-6 py-2 rounded-full font-medium transition-all bg-white text-slate-500 hover:bg-slate-100 border border-slate-200" data-index="6">Semester 7</button>
        </div>

        <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-lg fade-in-up delay-200 min-h-[200px]">
            <div id="curriculumContent" class="grid md:grid-cols-2 gap-4">
                </div>
            <div class="mt-6 pt-4 border-t border-slate-200 text-right">
                <p class="text-lg font-bold text-blue-600">Total SKS Semester: <span id="sksTotal" class="text-slate-900">0</span></p>
            </div>
        </div>
    </div>
</section>

<script>
    // Data Mata Kuliah Sistem Informasi (MK yang di-highlight kuning saja)
    const curriculumData = [
        // Semester 1
        {
            semester: 1,
            courses: [
                { code: 'SI22-U402', name: 'MANAJEMEN PEMASARAN', sks: 3 },
                { code: 'SI22-U104', name: 'PENGANTAR BISNIS', sks: 3 },
                { code: 'SI22-U106', name: 'MATEMATIKA DISKRET', sks: 3 },
                { code: 'SI22-U103', name: 'KEWIRAUSAHAAN TI', sks: 3 },
                { code: 'SI22-U101', name: 'ALGORITMA DAN PEMROGRAMAN', sks: 4 }
            ]
        },
        // Semester 2
        {
            semester: 2,
            courses: [
                { code: 'SI22-U204', name: 'SISTEM BASIS DATA', sks: 4 },
                { code: 'SI22-U202', name: 'PERANCANGAN UI/UX', sks: 2 },
                { code: 'SI22-U203', name: 'STRUKTUR DATA', sks: 4 },
                { code: 'SI22-U205', name: 'PENGEMBANGAN WEB', sks: 4 }
            ]
        },
        // Semester 3
        {
            semester: 3,
            courses: [
                { code: 'SI22-U403', name: 'STATISTIKA', sks: 4 },
                { code: 'SI22-U302', name: 'IMPLEMENTASI BASIS DATA', sks: 4 },
                { code: 'SI22-U301', name: 'JARINGAN KOMPUTER', sks: 4 },
                { code: 'SI22-U303', name: 'PEMROGRAMAN BERORIENTASI OBYEK', sks: 4 }
            ]
        },
        // Semester 4
        {
            semester: 4,
            courses: [
                { code: 'SI22-U201', name: 'PENULISAN KREATIF', sks: 2 },
                { code: 'SI22-A101', name: 'DASAR PEMBUATAN APLIKASI BERGERAK (MK KONSENTRASI)', sks: 3 },
                { code: 'SI22-A401', name: 'SISTEM INFORMASI PERUSAHAAN (MK KONSENTRASI)', sks: 3 },
                { code: 'SI22-A402', name: 'PEMROGRAMAN PERANGKAT BERGERAK (MK KONSENTRASI)', sks: 4 },
                { code: 'SI22-A501', name: 'KECERDASAN BISNIS (MK KONSENTRASI)', sks: 4 },
                { code: 'SI22-U401', name: 'MANDARIN', sks: 2 }
            ]
        },
        // Semester 5
        {
            semester: 5,
            courses: [
                { code: 'SI22-P503', name: 'HUKUM BISNIS & HAKI (MK PILIHAN)', sks: 4 },
                { code: 'SI22-A502', name: 'TEKNOLOGI BARU DAN INOVASI SISTEM INFORMASI (MK KONSENTRASI)', sks: 4 },
                { code: 'SI22-U501', name: 'SAINS DATA', sks: 4 }
            ]
        },
        // Semester 6
        {
            semester: 6,
            courses: [
                { code: 'SI22-A601', name: 'ANALISA DAN PERANCANGAN SISTEM INFORMASI (MK KONSENTRASI)', sks: 4 },
                { code: 'SI22-A602', name: 'PERENCANAAN SUMBER DAYA PERUSAHAAN (MK KONSENTRASI)', sks: 4 },
                { code: 'SI22-U601', name: 'VISUALISASI DATA', sks: 3 },
                { code: 'SI22-U702', name: 'MANAJEMEN PROYEK', sks: 4 }
            ]
        },
        // Semester 7
        {
            semester: 7,
            courses: [
                { code: 'SI22-U602', name: 'MAGANG KERJA', sks: 4 },
                { code: 'SI22-U801', name: 'SKRIPSI', sks: 6 }
            ]
        }
    ];

    const contentDiv = document.getElementById('curriculumContent');
    const tabButtons = document.querySelectorAll('.tab-btn');
    const sksTotalElement = document.getElementById('sksTotal');

    function switchTab(index) {
        // 1. Reset tampilan tombol
        tabButtons.forEach(btn => {
            btn.classList.remove('bg-slate-900', 'text-white', 'shadow-lg');
            btn.classList.add('bg-white', 'text-slate-500', 'hover:bg-slate-100', 'border', 'border-slate-200');
        });

        // 2. Terapkan tampilan aktif pada tombol yang dipilih
        const activeBtn = tabButtons[index];
        activeBtn.classList.add('bg-slate-900', 'text-white', 'shadow-lg');
        activeBtn.classList.remove('bg-white', 'text-slate-500', 'hover:bg-slate-100', 'border', 'border-slate-200');

        // 3. Ambil data kurikulum untuk semester tersebut
        const semesterData = curriculumData[index];
        
        // 4. Buat konten HTML
        let htmlContent = '';
        let totalSKS = 0;

        semesterData.courses.forEach(course => {
            totalSKS += course.sks;
            htmlContent += `
                <div class="p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <p class="text-xs font-semibold text-blue-600 mb-1">${course.code} <span class="text-xs text-slate-500 ml-2">(${course.sks} SKS)</span></p>
                    <h4 class="text-base font-bold text-slate-900">${course.name}</h4>
                </div>
            `;
        });

        // 5. Suntikkan konten ke dalam div
        contentDiv.innerHTML = htmlContent;
        sksTotalElement.textContent = totalSKS;
    }

    // Panggil fungsi untuk menampilkan Semester 1 secara default saat halaman dimuat
    switchTab(0);
</script>