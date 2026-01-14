<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Impact Invest')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Couleurs personnalisées -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        :root {
            --mint-green: #3EB489;
            --mint-light: #5ECFA3;
            --mint-dark: #2D9A6F;
            --black: #000000;
            --gray-dark: #1a1a1a;
            --white: #ffffff;
        }

        /* Animation du logo */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-animate {
            animation: fadeInDown 0.6s ease-out;
        }

        /* Effet de hover sur les liens */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--mint-green);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Navbar shadow on scroll */
        .nav-scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        /* Style pour les boutons auth */
        .auth-btn {
            transition: all 0.3s ease;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
        }

        .auth-btn-primary {
            background: linear-gradient(135deg, var(--mint-green), var(--mint-light));
            color: white;
            box-shadow: 0 4px 15px rgba(62, 180, 137, 0.3);
        }

        .auth-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(62, 180, 137, 0.4);
        }

        .auth-btn-secondary {
            color: var(--mint-green);
            border: 2px solid var(--mint-green);
        }

        .auth-btn-secondary:hover {
            background: var(--mint-green);
            color: white;
            transform: translateY(-2px);
        }

        /* Footer avec dégradé */
        .footer-gradient {
            background: linear-gradient(135deg, #000000 0%, var(--gray-dark) 100%);
        }

        /* Liens du footer animés */
        .footer-link {
            position: relative;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-link::before {
            content: '→';
            position: absolute;
            left: -20px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            padding-left: 25px;
            color: var(--mint-green);
        }

        .footer-link:hover::before {
            opacity: 1;
            left: 0;
        }

        /* Animation des sections du footer */
        .footer-section {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .footer-section:nth-child(1) {
            animation-delay: 0.1s;
        }

        .footer-section:nth-child(2) {
            animation-delay: 0.2s;
        }

        .footer-section:nth-child(3) {
            animation-delay: 0.3s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Icônes contact */
        .contact-icon {
            transition: all 0.3s ease;
        }

        .contact-item:hover .contact-icon {
            transform: scale(1.2) rotate(5deg);
            color: var(--mint-light);
        }

        /* Logo avec animation */
        .logo-icon {
            background: linear-gradient(135deg, var(--mint-green), var(--mint-light));
            transition: all 0.3s ease;
        }

        .logo-icon:hover {
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 8px 25px rgba(62, 180, 137, 0.4);
        }
    </style>
</head>
<body class="bg-white text-black font-sans">

    <!-- Navbar -->
   <!-- Navbar -->
<nav id="navbar" class="bg-white shadow-md sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row md:justify-between md:items-center">
        <!-- Logo -->
        <div class="logo-animate mb-2 md:mb-0">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <div class="w-10 h-10 logo-icon rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">II</span>
                </div>
                <h1 class="text-2xl font-bold bg-gradient-to-r from-[var(--mint-green)] to-[var(--mint-light)] bg-clip-text text-transparent">
                    Impact Invest
                </h1>
            </a>
        </div>

        <!-- Liens -->
        <ul class="flex flex-col md:flex-row md:space-x-6 font-semibold md:items-center">
            <!-- Liens publics -->
            <li><a href="{{ route('home') }}" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">Accueil</a></li>
            <li><a href="{{ route('projects') }}" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">Projets</a></li>
            <li><a href="{{ route('about') }}" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">À propos</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">Contact</a></li>

            @auth
                <!-- Seuls les admins voient le dashboard -->
                @if(auth()->user()->is_admin)
                    <li><a href="{{ route('dashboard') }}" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">Dashboard</a></li>
                @endif

                <!-- Déconnexion pour tous les connectés -->
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link hover:text-[var(--mint-green)] transition py-2 md:py-0">Déconnexion</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}" class="auth-btn auth-btn-secondary">Connexion</a></li>
                <li><a href="{{ route('register') }}" class="auth-btn auth-btn-primary">Inscription</a></li>
            @endguest
        </ul>
    </div>
</nav>


    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Premium -->
    <footer class="relative footer-gradient text-[var(--white)] mt-20 overflow-hidden">
        <!-- Effet de fond décoratif -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-[var(--mint-green)] rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[var(--mint-light)] rounded-full filter blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section principale -->
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Section 1 : À propos -->
                <div class="footer-section lg:col-span-1">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-12 h-12 logo-icon rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-2xl">II</span>
                        </div>
                        <h4 class="font-bold text-xl">Impact Invest</h4>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Votre plateforme d'investissement à impact positif, engagée pour un monde meilleur et plus durable.
                    </p>
                    
                    <!-- Réseaux sociaux premium -->
                    <div class="flex space-x-3">
                        <a href="#" class="group w-11 h-11 rounded-xl bg-white bg-opacity-5 backdrop-blur-sm flex items-center justify-center hover:bg-[var(--mint-green)] transition-all duration-300 border border-white border-opacity-10 hover:border-[var(--mint-green)]">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="group w-11 h-11 rounded-xl bg-white bg-opacity-5 backdrop-blur-sm flex items-center justify-center hover:bg-[var(--mint-green)] transition-all duration-300 border border-white border-opacity-10 hover:border-[var(--mint-green)]">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="group w-11 h-11 rounded-xl bg-white bg-opacity-5 backdrop-blur-sm flex items-center justify-center hover:bg-[var(--mint-green)] transition-all duration-300 border border-white border-opacity-10 hover:border-[var(--mint-green)]">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="group w-11 h-11 rounded-xl bg-white bg-opacity-5 backdrop-blur-sm flex items-center justify-center hover:bg-[var(--mint-green)] transition-all duration-300 border border-white border-opacity-10 hover:border-[var(--mint-green)]">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Section 2 : Navigation -->
                <div class="footer-section">
                    <h4 class="font-bold text-lg mb-6 text-white">Navigation</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('projects') }}" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Projets
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                À propos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section 3 : Ressources -->
                <div class="footer-section">
                    <h4 class="font-bold text-lg mb-6 text-white">Ressources</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Centre d'aide
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                                <span class="w-0 group-hover:w-6 h-0.5 bg-[var(--mint-green)] mr-0 group-hover:mr-3 transition-all duration-300"></span>
                                Documentation
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section 4 : Contact -->
                <div class="footer-section">
                    <h4 class="font-bold text-lg mb-6 text-white">Contactez-nous</h4>
                    <div class="space-y-4">
                        <a href="mailto:contact@impact-invest.com" class="group flex items-start space-x-3 text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                            <div class="w-10 h-10 rounded-lg bg-white bg-opacity-5 flex items-center justify-center flex-shrink-0 group-hover:bg-[var(--mint-green)] group-hover:bg-opacity-20 transition-all duration-300">
                                <svg class="w-5 h-5 text-[var(--mint-green)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 mb-1">Email</p>
                                <p class="text-sm font-medium">contact@impact-invest.com</p>
                            </div>
                        </a>

                        <a href="tel:+33612345678" class="group flex items-start space-x-3 text-gray-400 hover:text-[var(--mint-green)] transition-all duration-300">
                            <div class="w-10 h-10 rounded-lg bg-white bg-opacity-5 flex items-center justify-center flex-shrink-0 group-hover:bg-[var(--mint-green)] group-hover:bg-opacity-20 transition-all duration-300">
                                <svg class="w-5 h-5 text-[var(--mint-green)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 mb-1">Téléphone</p>
                                <p class="text-sm font-medium">+33 6 12 34 56 78</p>
                            </div>
                        </a>

                        <div class="group flex items-start space-x-3 text-gray-400">
                            <div class="w-10 h-10 rounded-lg bg-white bg-opacity-5 flex items-center justify-center flex-shrink-0 transition-all duration-300">
                                <svg class="w-5 h-5 text-[var(--mint-green)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-xs text-gray-500 mb-1">Adresse</p>
                                <p class="text-sm font-medium">123 Rue de l'Impact<br>75001 Paris, France</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ligne de séparation -->
            <div class="border-t border-white border-opacity-10"></div>

            <!-- Section copyright -->
            <div class="py-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm">
                    <p>&copy; {{ date('Y') }} <span class="text-white font-semibold">Impact Invest</span>. Tous droits réservés.</p>
                </div>

                <div class="flex flex-wrap justify-center md:justify-end gap-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-[var(--mint-green)] transition-colors duration-300">Conditions générales</a>
                    <a href="#" class="text-gray-400 hover:text-[var(--mint-green)] transition-colors duration-300">Politique de confidentialité</a>
                    <a href="#" class="text-gray-400 hover:text-[var(--mint-green)] transition-colors duration-300">Mentions légales</a>
                    <a href="#" class="text-gray-400 hover:text-[var(--mint-green)] transition-colors duration-300">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        // Effet d'ombre sur la navbar au scroll
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
        });

        // Animation smooth au scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>