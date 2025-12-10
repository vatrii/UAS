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
                    <span>Sistem<span class="text-orange-500">Informasi</span></span>
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