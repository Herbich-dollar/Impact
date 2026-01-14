@extends('layouts.app')

@section('title', 'Impact Invest - Investissement Responsable')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0">
    <!-- Image de fond -->
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('public/build/assets/pexels-safari-consoler-3290243-11211022.jpg');"
    ></div>

    <!-- Overlay sombre -->
    <div class="absolute inset-0 bg-black/50"></div>
</div>

    </div>

    <!-- Gradient Overlays -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-1/2 h-1/2 bg-emerald-500/20 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-1/2 h-1/2 bg-teal-500/20 blur-[120px] animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-8" x-data="{show: false}" x-init="setTimeout(() => show = true, 300)">
                <!-- Premium Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 transition-all duration-700"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-400"></span>
                    </span>
                    <span class="text-sm font-semibold text-white tracking-wide">Plateforme Certifiée · Impact Vérifié</span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-5xl md:text-7xl font-black leading-tight transition-all duration-700 delay-100"
                    :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <span class="text-white">
                        Investissez dans
                    </span>
                    <br>
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">
                        l'avenir durable
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed transition-all duration-700 delay-200"
                   :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    Rejoignez une communauté d'investisseurs visionnaires qui financent des projets à fort impact social et environnemental, tout en générant des rendements attractifs.
                </p>

                <!-- Key Features -->
                <div class="grid grid-cols-2 gap-4 transition-all duration-700 delay-300"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                        <div class="w-10 h-10 bg-emerald-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-white font-bold">Sécurisé</div>
                            <div class="text-xs text-gray-400">Certification AMF</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-sm rounded-xl border border-white/10">
                        <div class="w-10 h-10 bg-teal-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-white font-bold">Transparent</div>
                            <div class="text-xs text-gray-400">Suivi en temps réel</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 transition-all duration-700 delay-400"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <a href="{{ route('projects') }}"
                       class="group relative px-8 py-5 bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-2xl font-bold text-lg
                              shadow-2xl shadow-emerald-500/50 hover:shadow-emerald-500/70 hover:scale-[1.02] transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            Découvrir les projets
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="#how-it-works"
                       class="px-8 py-5 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-bold text-lg border-2 border-white/20
                              hover:bg-white/20 hover:border-white/40 hover:scale-[1.02] transition-all duration-300">
                        En savoir plus
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex items-center gap-6 pt-4 transition-all duration-700 delay-500"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    
                    <div class="text-sm">
                        <div class="text-white font-semibold">+5,200 investisseurs</div>
                        <div class="text-gray-400">nous font confiance</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Hero Image -->
            <div class="relative" x-data="{show: false}" x-init="setTimeout(() => show = true, 500)">
                <div class="relative transition-all duration-1000 delay-200"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'">
                    <!-- Main Image Container -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-emerald-500/20">
                        <img src="{{ asset('build/assets/pexels-darkshadephotos-15530747.jpg') }}"
     alt="Impact Investment"
     class="w-full h-auto object-cover">

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent"></div>
                    </div>

                    <!-- Floating Stats Cards -->
                    <div class="absolute -left-6 top-20 bg-white rounded-2xl p-6 shadow-2xl animate-float">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-black text-gray-900">+28%</div>
                                <div class="text-xs text-gray-600">ROI moyen</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -right-6 bottom-32 bg-white rounded-2xl p-6 shadow-2xl animate-float" style="animation-delay: 0.5s;">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-black text-gray-900">89K</div>
                                <div class="text-xs text-gray-600">Tonnes CO₂ évitées</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center p-2">
                <div class="w-1 h-3 bg-white/50 rounded-full animate-scroll"></div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section class="bg-white py-16 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center group cursor-pointer">
                <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-600 mb-2 
                            group-hover:scale-110 transition-transform duration-300">250+</div>
                <div class="text-gray-600 font-medium">Projets financés</div>
                <div class="text-sm text-gray-400 mt-1">Depuis 2020</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-teal-600 to-cyan-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">15MFCFA</div>
                <div class="text-gray-600 font-medium">Investis au total</div>
                <div class="text-sm text-gray-400 mt-1">Capital déployé</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-emerald-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">5.2K</div>
                <div class="text-gray-600 font-medium">Investisseurs actifs</div>
                <div class="text-sm text-gray-400 mt-1">Communauté engagée</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-cyan-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">98%</div>
                <div class="text-gray-600 font-medium">Taux de satisfaction</div>
                <div class="text-sm text-gray-400 mt-1">Note moyenne 4.9/5</div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-32 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block px-6 py-2 bg-emerald-100 text-emerald-700 rounded-full font-semibold mb-6">
                Processus simplifié
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">Comment investir ?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Un parcours d'investissement pensé pour être accessible, transparent et efficace
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 relative">
            <!-- Connection Line -->
            <div class="hidden md:block absolute top-24 left-0 right-0 h-1 bg-gradient-to-r from-emerald-200 via-teal-200 to-cyan-200 z-0"
                 style="margin-left: 10%; margin-right: 10%;"></div>

            <!-- Step 1 -->
            <div class="relative group">
                <div class="relative p-10 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-transparent hover:border-emerald-200 z-10">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center text-white font-black text-2xl shadow-xl group-hover:scale-110 transition-transform duration-300">
                        01
                    </div>

                    <!-- Icon -->
                    <div class="mt-6 mb-6 flex justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <img src="/api/placeholder/60/60" alt="Explorer" class="w-16 h-16 object-contain">
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Explorez</h3>
                    <p class="text-gray-600 text-center leading-relaxed mb-6">
                        Parcourez notre sélection rigoureuse de projets à impact vérifié, filtrés par secteur, impact et rendement attendu.
                    </p>

                    <!-- Features List -->
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Projets audités et certifiés</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Documentation complète disponible</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative group md:mt-8">
                <div class="relative p-10 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-transparent hover:border-teal-200 z-10">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center text-white font-black text-2xl shadow-xl group-hover:scale-110 transition-transform duration-300">
                        02
                    </div>

                    <div class="mt-6 mb-6 flex justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <img src="/api/placeholder/60/60" alt="Analyser" class="w-16 h-16 object-contain">
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Analysez</h3>
                    <p class="text-gray-600 text-center leading-relaxed mb-6">
                        Évaluez en détail les indicateurs d'impact ESG, les prévisions financières et les risques associés à chaque projet.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Indicateurs ESG détaillés</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Analyse risque/rendement</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative group md:mt-16">
                <div class="relative p-10 bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-transparent hover:border-cyan-200 z-10">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-cyan-500 to-emerald-600 rounded-2xl flex items-center justify-center text-white font-black text-2xl shadow-xl group-hover:scale-110 transition-transform duration-300">
                        03
                    </div>

                    <div class="mt-6 mb-6 flex justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-cyan-100 to-emerald-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <img src="/api/placeholder/60/60" alt="Investir" class="w-16 h-16 object-contain">
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Investissez</h3>
                    <p class="text-gray-600 text-center leading-relaxed mb-6">
                        Investissez en toute sécurité et suivez l'évolution de votre portefeuille et de votre impact en temps réel sur votre tableau de bord.
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Paiement sécurisé 3D Secure</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-gray-600">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                            <span>Suivi d'impact en direct</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-20">
            <a href="{{ route('register') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-2xl font-bold text-lg shadow-2xl shadow-emerald-500/30 hover:shadow-emerald-500/50 hover:scale-105 transition-all duration-300">
                Créer mon compte gratuitement
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <p class="text-sm text-gray-500 mt-4">Sans engagement · Inscription en 2 minutes</p>
        </div>
    </div>
</section>

<!-- Impact Categories Section -->
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block px-6 py-2 bg-teal-100 text-teal-700 rounded-full font-semibold mb-6">
                Nos domaines d'impact
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">Investissez selon vos valeurs</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Chaque projet est classé selon son impact principal, vous permettant d'aligner vos investissements avec vos convictions
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Category 1 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Énergie Renouvelable" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900 via-emerald-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Énergie Renouvelable</h3>
                    <p class="text-white/80 text-sm mb-4">Projets solaires, éoliens et hydroélectriques</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>68 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Agriculture Durable" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 via-teal-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Agriculture Durable</h3>
                    <p class="text-white/80 text-sm mb-4">Agroécologie et circuits courts</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>42 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Économie Circulaire" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-cyan-900 via-cyan-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Économie Circulaire</h3>
                    <p class="text-white/80 text-sm mb-4">Recyclage et valorisation des déchets</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>35 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Mobilité Verte" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900 via-green-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Mobilité Verte</h3>
                    <p class="text-white/80 text-sm mb-4">Transport électrique et solutions durables</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>28 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category 5 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Inclusion Sociale" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900 via-purple-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Inclusion Sociale</h3>
                    <p class="text-white/80 text-sm mb-4">Emploi, éducation et solidarité</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>51 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Category 6 -->
            <div class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="relative h-64">
                    <img src="/api/placeholder/400/300" alt="Innovation Tech" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/50 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Innovation Tech</h3>
                    <p class="text-white/80 text-sm mb-4">Technologies vertes et numériques</p>
                    <div class="flex items-center gap-2 text-sm font-semibold">
                        <span>39 projets actifs</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block px-6 py-2 bg-cyan-100 text-cyan-700 rounded-full font-semibold mb-6">
                Témoignages
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">Ils nous font confiance</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Découvrez les retours d'expérience de notre communauté d'investisseurs
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "Une plateforme exceptionnelle qui allie performance financière et impact réel. J'ai investi dans 5 projets et je suis ravi de pouvoir suivre leur évolution et leur impact environnemental."
                </p>
                <div class="flex items-center gap-4">
                    <img src="/api/placeholder/50/50" alt="Sophie Martin" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-bold text-gray-900">Sophie Martin</div>
                        <div class="text-sm text-gray-500">Investisseuse depuis 2022</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "Enfin une solution d'investissement qui a du sens ! La transparence sur l'impact des projets et la qualité du suivi sont exemplaires. Mon portefeuille performe très bien."
                </p>
                <div class="flex items-center gap-4">
                    <img src="/api/placeholder/50/50" alt="Thomas Dubois" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-bold text-gray-900">Thomas Dubois</div>
                        <div class="text-sm text-gray-500">Entrepreneur · Investisseur</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="flex items-center gap-1 mb-6">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.
                        118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "J'apprécie particulièrement la rigueur dans la sélection des projets et les outils d'analyse fournis. C'est rassurant de savoir que chaque FCFA investi contribue à un monde meilleur."
                </p>
                <div class="flex items-center gap-4">
                    <img src="/api/placeholder/50/50" alt="Marie Lefebvre" class="w-12 h-12 rounded-full">
                    <div>
                        <div class="font-bold text-gray-900">Marie Lefebvre</div>
                        <div class="text-sm text-gray-500">Directrice RSE · Investisseuse</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-32 bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 text-center z-10">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-6">
            Prêt à faire la différence ?
        </h2>
        <p class="text-xl md:text-2xl text-white/90 mb-12 max-w-3xl mx-auto">
            Rejoignez des milliers d'investisseurs qui construisent un avenir durable tout en générant des rendements attractifs
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mb-12">
            <a href="{{ route('register') }}"
               class="group px-10 py-5 bg-white text-emerald-700 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-white/30 hover:scale-105 transition-all duration-300">
                <span class="flex items-center gap-2">
                    Commencer maintenant
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>

            <a href="{{ route('projects') }}"
               class="px-10 py-5 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-bold text-lg border-2 border-white/30 hover:bg-white/20 hover:border-white/50 hover:scale-105 transition-all duration-300">
                Voir les projets
            </a>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Sans frais cachés</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Inscription en 2 minutes</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Sans engagement</span>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@keyframes scroll {
    0% { transform: translateY(0); opacity: 0; }
    40% { opacity: 1; }
    100% { transform: translateY(16px); opacity: 0; }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animate-scroll {
    animation: scroll 2s ease-in-out infinite;
}
</style>
@endsection