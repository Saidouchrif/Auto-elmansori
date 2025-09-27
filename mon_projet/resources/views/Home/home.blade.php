@extends('Layouts.app')

@section('title', 'Auto El Mansour - Accueil')

@section('content')
    <!-- Navbar -->
    <nav class="bg-white shadow-lg border-b border-gray-200 sticky top-0 z-50 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo et nom -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Auto El Mansour" class="h-10 w-10 rounded-full object-cover">
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Auto El Mansour</h1>
                        <p class="text-xs text-gray-500">Pièces Auto</p>
                    </div>
                </div>

                <!-- Navigation principale -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium border-b-2 border-blue-600">
                        Accueil
                    </a>
                    
                    <!-- Dropdown Catégories -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium flex items-center">
                            Catégories
                            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                        Moteur & Performance
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                        </svg>
                                        Freinage & Suspension
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                        Éclairage & Électrique
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                                        </svg>
                                        Filtration & Huiles
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Pneus & Jantes
                                    </div>
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h10a2 2 0 012 2v12a4 4 0 01-4 4H9"></path>
                                        </svg>
                                        Carrosserie & Intérieur
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('apropos') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                        À propos
                    </a>
                    
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                        Contact
                    </a>
                </div>

                <!-- Menu mobile -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-blue-600" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menu mobile -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium text-blue-600 bg-blue-50 rounded-md">Accueil</a>
                    <div class="space-y-1">
                        <button class="w-full text-left px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600" onclick="toggleMobileCategories()">
                            Catégories
                            <svg class="inline ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden ml-4 space-y-1" id="mobile-categories">
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Moteur & Performance</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Freinage & Suspension</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Éclairage & Électrique</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Filtration & Huiles</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Pneus & Jantes</a>
                            <a href="#" class="block px-3 py-2 text-sm text-gray-600">Carrosserie & Intérieur</a>
                        </div>
                    </div>
                    <a href="{{ route('apropos') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">À propos</a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16 w-full overflow-hidden">
        <div class="w-full px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-slide-down">Auto El Mansour</h1>
            <p class="text-xl mb-8 animate-slide-up animation-delay-300">Votre spécialiste en pièces automobiles de qualité</p>
            <div class="animate-bounce-in animation-delay-600">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Découvrir nos produits
                </button>
            </div>
        </div>
    </div>

    <!-- Annonces de Pièces Auto -->
    <div class="w-full px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 animate-slide-up">Nos Pièces Automobiles</h2>
            <p class="text-gray-600 max-w-2xl mx-auto animate-slide-up animation-delay-200">Découvrez notre large gamme de pièces automobiles</p>
        </div>

        <!-- Grille des annonces -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 stagger-animation">
            <!-- Annonce 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500 animate-slide-up group hover-lift">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Moteur Complet Renault</h3>
                    <p class="text-sm text-gray-600 mb-3">Moteur 1.5 dCi, excellent état</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-blue-600">2,500 MAD</span>
                        <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Disponible</span>
                    </div>
                    <button class="w-full mt-3 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transform hover:scale-105 transition-all duration-300 group-hover:shadow-lg">
                        Voir détails
                    </button>
                </div>
            </div>

            <!-- Annonce 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500 animate-slide-up group hover-lift">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Kit Freinage BMW</h3>
                    <p class="text-sm text-gray-600 mb-3">Disques + plaquettes avant, série 3</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-blue-600">850 MAD</span>
                        <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Neuf</span>
                    </div>
                    <button class="w-full mt-3 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors">
                        Voir détails
                    </button>
                </div>
            </div>

            <!-- Annonce 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500 animate-slide-up group hover-lift">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Phares LED Mercedes</h3>
                    <p class="text-sm text-gray-600 mb-3">Phares avant LED Classe C</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-blue-600">1,200 MAD</span>
                        <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Occasion</span>
                    </div>
                    <button class="w-full mt-3 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors">
                        Voir détails
                    </button>
                </div>
            </div>

            <!-- Annonce 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500 animate-slide-up group hover-lift">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Jantes Alliage 17"</h3>
                    <p class="text-sm text-gray-600 mb-3">Set de 4 jantes alu 17 pouces</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-blue-600">1,800 MAD</span>
                        <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Excellent</span>
                    </div>
                    <button class="w-full mt-3 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors">
                        Voir détails
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function toggleMobileCategories() {
            const categories = document.getElementById('mobile-categories');
            categories.classList.toggle('hidden');
        }
    </script>
@endsection