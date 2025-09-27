@extends('Layouts.app')

@section('title', 'À propos - Auto El Mansour')

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
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">
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

                    <a href="{{ route('apropos') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium border-b-2 border-blue-600">
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
                    <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Accueil</a>
                    <a href="{{ route('apropos') }}" class="block px-3 py-2 text-base font-medium text-blue-600 bg-blue-50 rounded-md">À propos</a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 w-full overflow-hidden">
        <div class="w-full px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-slide-down">À propos d'Auto El Mansour</h1>
            <p class="text-xl mb-8 animate-slide-up animation-delay-300">Une histoire de passion et d'expertise automobile</p>
        </div>
    </div>

    <!-- Section À propos -->
    <div class="w-full px-4 sm:px-6 lg:px-8 py-16">
        <!-- Histoire principale -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="animate-slide-right">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Une Jeune Entreprise Lancée en 2024</h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Auto El Mansour avance avec l'ambition et le professionnalisme des meilleurs de l'industrie.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Tout a commencé il y a plus de 15 ans, quand mon père—un passionné d'automobile et un véritable artisan—s'est consacré au monde des pièces et accessoires automobiles. Reconnu pour sa fiabilité et son approche client-first, il a bâti une solide réputation locale, un client à la fois.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    En 2024, j'ai pris le volant. Avec une vision fraîche et un état d'esprit numérique, j'ai lancé Auto El Mansour, transformant notre entreprise familiale en une plateforme en ligne qui rend les accessoires automobiles de qualité plus accessibles que jamais.
                </p>
            </div>
            <div class="relative group max-w-md mx-auto lg:mx-0 animate-slide-left animation-delay-300">
                <!-- Cadre décoratif -->
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 rounded-2xl blur-lg opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                
                <!-- Container principal de l'image -->
                <div class="relative bg-white p-3 rounded-2xl shadow-2xl transform group-hover:scale-105 transition-all duration-500">
                    <!-- Image avec effets - Format portrait optimisé -->
                    <div class="relative overflow-hidden rounded-xl aspect-[3/4]">
                        <img src="{{ asset('storage/images/mansori.jpg') }}" 
                             alt="Mansouri - Fondateur Auto El Mansour" 
                             class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700"
                             style="object-position: center 20%">
                        
                        <!-- Overlay gradient sophistiqué -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                        
                        <!-- Overlay avec motif -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-transparent to-purple-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Badge professionnel -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 shadow-lg">
                            <span class="text-xs font-semibold text-blue-600">CEO & Fondateur</span>
                        </div>
                        
                        <!-- Informations en bas -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-2xl font-bold mb-1 drop-shadow-lg">Mansouri</h3>
                                <p class="text-sm text-blue-200 mb-2 drop-shadow">Fondateur & Directeur Général</p>
                                <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
                                    <div class="w-8 h-0.5 bg-blue-400"></div>
                                    <span class="text-xs text-gray-200">15+ années d'expérience</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Citation ou description courte -->
                    <div class="mt-4 p-4 bg-gray-50 rounded-xl border-l-4 border-blue-600">
                        <p class="text-sm text-gray-700 italic font-medium">
                            "Transformer l'héritage familial en innovation numérique pour servir nos clients avec excellence."
                        </p>
                        <div class="flex items-center mt-2">
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
                            </div>
                            <span class="ml-2 text-xs text-gray-500">Vision 2024</span>
                        </div>
                    </div>
                </div>
                
                <!-- Éléments décoratifs flottants -->
                <div class="absolute -top-2 -right-2 w-4 h-4 bg-blue-500 rounded-full opacity-60 animate-pulse"></div>
                <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-purple-500 rounded-full opacity-40 animate-pulse delay-1000"></div>
            </div>
        </div>

        <!-- Notre force -->
        <div class="bg-gray-50 rounded-2xl p-8 mb-16 animate-fade-in">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4 animate-slide-up">Notre Force</h2>
                <p class="text-lg text-gray-700 animate-slide-up animation-delay-200">Une combinaison puissante d'expertise et d'innovation</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 animate-slide-up animation-delay-400">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">15+ Années d'Expertise</h3>
                    </div>
                    <p class="text-gray-600">L'expérience de mon père dans le domaine des pièces automobiles, construite sur la confiance et la qualité.</p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 animate-slide-up animation-delay-600">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 animate-float">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Vision Numérique</h3>
                    </div>
                    <p class="text-gray-600">Mon engagement à apporter cette connaissance dans l'ère numérique avec des solutions modernes et accessibles.</p>
                </div>
            </div>
        </div>

        <!-- Nos magasins -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Magasin -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-blue-600 text-white p-6">
                    <h3 class="text-2xl font-bold mb-2">TROUVEZ NOTRE MAGASIN</h3>
                    <p class="text-blue-100">Situé à Casablanca</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 mb-4">
                        Notre magasin vous accueille avec une large sélection d'accessoires automobiles et des conseils personnalisés. Chez Auto El Mansour, être proche de nos clients fait toute la différence.
                    </p>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Casablanca, Maroc
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Lun - Sam: 8h00 - 18h00
                    </div>
                </div>
            </div>

            <!-- Atelier -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-green-600 text-white p-6">
                    <h3 class="text-2xl font-bold mb-2">TROUVEZ NOTRE ATELIER</h3>
                    <p class="text-green-100">Service professionnel</p>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 mb-4">
                        Notre atelier professionnel offre des services d'installation et de maintenance pour tous vos accessoires automobiles. Une équipe experte à votre service.
                    </p>
                    <div class="flex items-center text-gray-600 mb-2">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Installation professionnelle
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Garantie sur tous les services
                    </div>
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
    </script>
@endsection