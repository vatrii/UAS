<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi - Fakultas Ilmu Komputer</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-slate-50 text-slate-600">

    <!-- NAVBAR -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-5 bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="text-2xl font-bold flex items-center gap-2 logo-container">
                <a href="index.php" class="flex items-center gap-2">
                    <div class="bg-orange-500 p-1.5 rounded-lg">
                        <i data-lucide="layout" class="text-white w-6 h-6"></i>
                    </div>
                    <span>SIEGA</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 nav-links">
                <a href="index.php" class="font-medium hover:text-orange-500 transition-colors">Tentang</a>
                <a href="achievement.php" class="font-medium hover:text-orange-500 transition-colors">Pencapaian</a>
                <a href="prospects.php" class="font-medium hover:text-orange-500 transition-colors">Prospek Karir</a>
                <a href="curriculum.php" class="font-medium hover:text-orange-500 transition-colors">Kurikulum</a>
                <a href="facilities.php" class="font-medium hover:text-orange-500 transition-colors">Fasilitas</a>
            </div>

            <button class="md:hidden" onclick="toggleMobileMenu()">
                <i data-lucide="menu" id="menuIcon" class="w-7 h-7"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-slate-100 p-4 flex flex-col gap-4 text-slate-600">
            <a href="index.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Tentang</a>
            <a href="achievement.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Pencapaian</a>
            <a href="prospects.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Prospek Karir</a>
            <a href="curriculum.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Kurikulum</a>
            <a href="facilities.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Fasilitas</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black opacity-90"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center fade-in-up">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-orange-500/20 border border-orange-400/30 text-orange-300 text-sm font-semibold mb-6">
                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i> Lifestyle, Enthusiasm, and New Experiences
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight">
                S I E G A <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">Sistem Informasi, E Commerce, Game Technology, dan Akuntansi + Sistem Informasi</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                Dalam bahasa Spanyol, “Siega” berarti panen. SIEGA Unika Soegijapranata percaya bahwa penguasaan teknologi informasi adalah hal yang tak terhindarkan, dan jika diterapkan dengan benar, teknologi akan menghasilkan manfaat besar bagi kehidupan manusia.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-slate-50 to-transparent z-20"></div>
    </header>

    <!-- STATS SECTION -->
    <?php include 'components/stats.php'; ?>

    <!-- TIMELINE SECTION -->
    <section id="history" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">

            <div class="text-center mb-16 fade-in-up">
                <h3 class="text-blue-600 font-bold uppercase tracking-wider text-sm mb-2">Perjalanan Kami</h3>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Sejarah SIEGA</h2>
                <div class="h-1 w-20 bg-orange-500 mt-4 mx-auto rounded-full"></div>
                <p class="mt-4 text-slate-500">
                    Transformasi dan inovasi berkelanjutan demi menjawab tantangan zaman.
                </p>
            </div>

            <div class="relative fade-in-up delay-100">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-slate-200"></div>

                <div class="relative flex items-start mb-12 group">
                    <div class="absolute left-0 w-16 h-16 flex items-center justify-center bg-white border-4 border-orange-100 rounded-full z-10 group-hover:scale-110 group-hover:border-orange-200 transition-all duration-300">
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="flag" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="ml-24 bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition-all duration-300 w-full relative">
                        <div class="absolute top-6 -left-2 w-4 h-4 bg-slate-50 border-l border-b border-slate-100 transform rotate-45"></div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-slate-900">Awal Mula Berdiri</h3>
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 text-xs font-bold rounded-full mt-2 sm:mt-0">Tahun 2013</span>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Unika Soegijapranata resmi mendapatkan ijin operasional program studi Sistem Informasi. Pada awal berdirinya, langsung membuka dua konsentrasi unggulan: <span class="font-bold text-slate-800">Sistem Informasi</span> dan <span class="font-bold text-slate-800">Game Technology</span>.
                        </p>
                    </div>
                </div>

                <div class="relative flex items-start mb-12 group">
                    <div class="absolute left-0 w-16 h-16 flex items-center justify-center bg-white border-4 border-blue-100 rounded-full z-10 group-hover:scale-110 group-hover:border-blue-200 transition-all duration-300">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="ml-24 bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition-all duration-300 w-full relative">
                        <div class="absolute top-6 -left-2 w-4 h-4 bg-slate-50 border-l border-b border-slate-100 transform rotate-45"></div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-slate-900">Inovasi Kuliah Ganda</h3>
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 text-xs font-bold rounded-full mt-2 sm:mt-0">Tahun 2017</span>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Melakukan terobosan dengan membuka program kuliah ganda <span class="font-bold text-slate-800">Akuntansi + Sistem Informasi (AKSI)</span>. Program ini menggabungkan keahlian finansial dan teknologi untuk mencetak lulusan yang relevan dengan kebutuhan bisnis modern.
                        </p>
                    </div>
                </div>

                <div class="relative flex items-start group">
                    <div class="absolute left-0 w-16 h-16 flex items-center justify-center bg-white border-4 border-green-100 rounded-full z-10 group-hover:scale-110 group-hover:border-green-200 transition-all duration-300">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="ml-24 bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:shadow-lg transition-all duration-300 w-full relative">
                        <div class="absolute top-6 -left-2 w-4 h-4 bg-slate-50 border-l border-b border-slate-100 transform rotate-45"></div>

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-slate-900">Ekspansi E-Commerce</h3>
                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 text-xs font-bold rounded-full mt-2 sm:mt-0">Tahun 2018</span>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Merespon pesatnya pertumbuhan ekonomi digital, SIEGA membuka konsentrasi <span class="font-bold text-slate-800">E-Commerce</span>. Melengkapi ekosistem pembelajaran yang komprehensif bagi mahasiswa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VISI MISI SECTION -->
    <section id="visi-misi" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">

            <div class="text-center mb-16 fade-in-up">
                <h3 class="text-orange-500 font-bold uppercase tracking-wider text-sm mb-2">Landasan Kami</h3>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Visi & Misi</h2>
                <div class="h-1 w-20 bg-blue-600 mt-4 mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="fade-in-up delay-100">
                    <div class="relative bg-gradient-to-br from-slate-900 to-blue-900 rounded-3xl p-8 md:p-12 text-white shadow-2xl overflow-hidden">
                        <i data-lucide="target" class="absolute -right-6 -bottom-6 w-48 h-48 text-white/5 rotate-12"></i>
                        <i data-lucide="quote" class="w-10 h-10 text-orange-500 mb-6 opacity-80"></i>

                        <h3 class="text-2xl font-bold mb-6 tracking-wide border-b border-white/20 pb-4 inline-block">VISI</h3>

                        <p class="text-lg md:text-xl leading-relaxed font-light italic text-slate-100">
                            "Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran."
                        </p>

                        <div class="flex flex-wrap gap-3 mt-8">
                            <span class="px-4 py-1.5 bg-white/10 rounded-full text-sm font-semibold border border-white/20">❤️ Cinta Kasih</span>
                            <span class="px-4 py-1.5 bg-white/10 rounded-full text-sm font-semibold border border-white/20">⚖️ Keadilan</span>
                            <span class="px-4 py-1.5 bg-white/10 rounded-full text-sm font-semibold border border-white/20">🤝 Kejujuran</span>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up delay-200">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-orange-100 p-2 rounded-lg">
                            <i data-lucide="list-checks" class="w-6 h-6 text-orange-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Misi Program Studi</h3>
                    </div>

                    <ul class="space-y-4">
                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh dan potensi kepemimpinan.</p>
                        </li>

                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Melakukan penelitian untuk pengembangan ilmu dan teknologi demi meningkatkan kesejahteraan manusia.</p>
                        </li>

                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Melakukan pengabdian kepada masyarakat sebagai penerapan ilmu dan teknologi yang telah dikembangkan dalam penelitian dan kesejahteraan manusia.</p>
                        </li>

                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Memberikan perhatian dan mencari pemecahan terhadap berbagai masalah sosial budaya masyarakat melalui komunitas akademik.</p>
                        </li>

                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Mengembangkan jaringan Kerjasama dengan berbagai institusi pendidikan, penelitian dan pengabdian lokal, nasional dan internasional.</p>
                        </li>

                        <li class="flex gap-4 items-start group">
                            <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-blue-600 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Memperbaiki dan mengembangkan universitas secara terus menerus, sehingga dapat mendukung segala upaya untuk mencapai keunggulan.</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- DOSEN SECTION -->
    <section id="lecturers" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in-up">
                <h3 class="text-blue-600 font-bold uppercase tracking-wider text-sm mb-2">Tim Pengajar</h3>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Dosen Profesional</h2>
                <div class="h-1 w-20 bg-orange-500 mt-4 mx-auto rounded-full"></div>
                <p class="mt-4 text-slate-500 max-w-2xl mx-auto">
                    Belajar langsung dari para ahli dan praktisi yang berpengalaman di bidang teknologi dan bisnis.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-100 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Prof_Ridwan.jpg" alt="Dosen 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Prof. Dr. Ridwan Sanjaya S.E., S.Kom., MS.IEC.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-200 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Prof_Berdi.jpg" alt="Dosen 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Dr. Bernadinus Harnadi S.T., M.T.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-300 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Pak_Yoga.jpg" alt="Dosen 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Dr. Albertus Dwiyoga Widiantoro S.Kom., M.Kom.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Pak_Andre.jpg" alt="Dosen 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Andre Kurniawan Pamudji S.Kom., M.Ling.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Bu_Stef.jpg" alt="Dosen 5" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Stephani Inggrit Swastini, S.Kom, MBA</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Pak_Cahyo.jpg" alt="Dosen 6" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Agus Cahyo Nugroho S.Kom., M.T.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Pak_Erdhi.jpg" alt="Dosen 7" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Erdhi Widyarto Nugroho S.T., M.T.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Bu_Brenda.jpg" alt="Dosen 8" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Dr. T. Brenda Ch S.T., M.T.</h3>
                    </div>
                </div>

                <div class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 fade-in-up delay-400 border border-slate-100">
                    <div class="h-72 overflow-hidden relative">
                        <img src="assets/Pak_Hendra.jpg" alt="Dosen 9" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Fx. Hendra Prasetya S.T., M.T.</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- FLOATING BUTTONS -->
    <div class="fixed bottom-6 right-6 flex flex-col gap-4 z-40">
        <a href="https://wa.me/6281903385595" target="_blank" class="bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 hover:shadow-green-500/40 transition-all flex items-center justify-center" title="Chat Admin">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
            </svg>
        </a>

        <script src="script.js"></script>
</body>

</html>