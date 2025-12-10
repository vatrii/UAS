<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi - Fakultas Ilmu Komputer</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-50 text-slate-600">

    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-5 bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="text-2xl font-bold flex items-center gap-2 logo-container">
                <a href="index.php" class="flex items-center gap-2"> <div class="bg-orange-500 p-1.5 rounded-lg">
                        <i data-lucide="layout" class="text-white w-6 h-6"></i>
                    </div>
                    <span>Sistem<span class="text-orange-500">Informasi</span></span>
                </a>
            </div>

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

        <div id="mobileMenu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-slate-100 p-4 flex flex-col gap-4 text-slate-600">
            <a href="index.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Tentang</a>
            <a href="achievement.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Pencapaian</a>
            <a href="prospects.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Prospek Karir</a>
            <a href="curriculum.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Kurikulum</a>
            <a href="facilities.php" class="font-medium p-2 hover:bg-slate-50 rounded-lg">Fasilitas</a>
        </div>
    </nav>