@extends('Layouts.app')

@section('title', 'Contact - Auto El Mansour')

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

                    <a href="{{ route('apropos') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">
                        À propos
                    </a>
                    
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium border-b-2 border-blue-600">
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
                    <a href="{{ route('apropos') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">À propos</a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-blue-600 bg-blue-50 rounded-md">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contactez-nous</h1>
            <p class="text-xl mb-8">Nous sommes là pour vous aider et répondre à toutes vos questions</p>
        </div>
    </div>

    <!-- Section Contact -->
    <div class="w-full px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Informations de contact -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Nos Coordonnées</h2>
                
                <!-- Téléphone -->
                <div class="flex items-start mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Téléphone</h3>
                        <p class="text-gray-600">+212 6 12 34 56 78</p>
                        <p class="text-gray-600">+212 5 22 98 76 54</p>
                        <p class="text-sm text-gray-500 mt-1">Lun - Sam: 8h00 - 18h00</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start mb-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                        <p class="text-gray-600">contact@autoelmansour.ma</p>
                        <p class="text-gray-600">info@autoelmansour.ma</p>
                        <p class="text-sm text-gray-500 mt-1">Réponse sous 24h</p>
                    </div>
                </div>

                <!-- Adresse -->
                <div class="flex items-start mb-8">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Adresse</h3>
                        <p class="text-gray-600">123 Avenue Mohammed V</p>
                        <p class="text-gray-600">Casablanca 20000, Maroc</p>
                        <p class="text-sm text-gray-500 mt-1">Quartier des Habous</p>
                    </div>
                </div>

                <!-- Horaires -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Horaires d'ouverture</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Lundi - Vendredi</span>
                            <span class="text-gray-900 font-medium">8h00 - 18h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Samedi</span>
                            <span class="text-gray-900 font-medium">8h00 - 16h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dimanche</span>
                            <span class="text-red-600 font-medium">Fermé</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Envoyez-nous un message</h2>
                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                            <input type="text" id="nom" name="nom" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="sujet" class="block text-sm font-medium text-gray-700 mb-2">Sujet</label>
                        <select id="sujet" name="sujet" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Choisissez un sujet</option>
                            <option value="devis">Demande de devis</option>
                            <option value="info">Informations produit</option>
                            <option value="support">Support technique</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Décrivez votre demande..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>

        <!-- Carte Google Maps -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Notre Localisation</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-96 bg-gray-200 relative">
                    <!-- Intégration Google Maps -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8944467618896!2d-7.6204!3d33.5731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Morocco!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full">
                    </iframe>
                </div>
                <div class="p-6 bg-white">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Auto El Mansour - Casablanca</h3>
                        <p class="text-gray-600 mb-4">123 Avenue Mohammed V, Quartier des Habous, Casablanca 20000</p>
                        <div class="flex justify-center space-x-4">
                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Itinéraire
                            </a>
                            <a href="tel:+212612345678" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Appeler
                            </a>
                        </div>
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