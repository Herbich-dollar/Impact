@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- Gradient Overlays -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-1/2 h-1/2 bg-emerald-500/20 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-1/2 h-1/2 bg-teal-500/20 blur-[120px] animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 z-10 w-full">
        <div class="text-center" x-data="{show: false}" x-init="setTimeout(() => show = true, 300)">
            <!-- Premium Badge -->
            <div class="inline-flex items-center gap-3 px-5 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-8 transition-all duration-700"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-400"></span>
                </span>
                <span class="text-sm font-semibold text-white tracking-wide">Notre Mission</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6 transition-all duration-700 delay-100"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <span class="text-white">Transformer l'investissement</span>
                <br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">
                    en force positive
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-12 transition-all duration-700 delay-200"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Connecter les investisseurs visionnaires aux projets qui façonnent un avenir meilleur
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-8 max-w-3xl mx-auto transition-all duration-700 delay-300"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <div class="text-center group cursor-pointer">
                    <div class="text-4xl font-black text-emerald-400 group-hover:scale-110 transition-transform duration-300">2026</div>
                    <div class="text-sm text-gray-400 mt-2">Année de création</div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="text-4xl font-black text-teal-400 group-hover:scale-110 transition-transform duration-300">0</div>
                    <div class="text-sm text-gray-400 mt-2">Projets financés</div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="text-4xl font-black text-cyan-400 group-hover:scale-110 transition-transform duration-300">0FCFA</div>
                    <div class="text-sm text-gray-400 mt-2">Capital déployé</div>
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

<!-- Vision Section -->
<section class="py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6" x-data="{show: false}" x-init="setTimeout(() => show = true, 400)">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-8 transition-all duration-700"
                 :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                <div>
                    <div class="inline-flex items-center gap-2 px-5 py-2 bg-emerald-100 text-emerald-700 rounded-full font-bold text-sm mb-6">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                        Notre Vision
                    </div>
                    
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                        Un monde où chaque euro investi 
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600">
                            crée de la valeur
                        </span>
                    </h2>
                    
                    <p class="text-xl text-gray-600 leading-relaxed mb-6">
                        Impact Invest est née de la volonté de rendre l'investissement 
                        <span class="font-bold text-emerald-600">plus responsable</span>, 
                        <span class="font-bold text-teal-600">plus transparent</span> et 
                        <span class="font-bold text-cyan-600">plus utile</span> pour la société.
                    </p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Nous sélectionnons des projets à fort impact social, environnemental et économique, 
                        afin de permettre aux investisseurs de donner du sens à leur capital tout en obtenant des rendements durables.
                    </p>
                </div>

                <!-- Key Points -->
                <div class="space-y-4 pt-6">
                    <div class="flex items-start gap-4 p-4 bg-emerald-50 rounded-2xl border border-emerald-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-10 h-10 bg-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Sélection rigoureuse</h4>
                            <p class="text-gray-600 text-sm">Chaque projet est audité par nos experts</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-teal-50 rounded-2xl border border-teal-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-10 h-10 bg-teal-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Impact mesurable</h4>
                            <p class="text-gray-600 text-sm">Suivi en temps réel de vos investissements</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-cyan-50 rounded-2xl border border-cyan-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-10 h-10 bg-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Sécurité maximale</h4>
                            <p class="text-gray-600 text-sm">Plateforme certifiée et régulée</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative transition-all duration-700 delay-200"
                 :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'">
                <div class="relative">
                    <!-- Main Card -->
                    <div class="bg-gradient-to-br from-emerald-600 to-teal-600 rounded-3xl p-10 shadow-2xl transform hover:scale-105 transition-all duration-500">
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center group hover:scale-110 transition-transform duration-300">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-white/80 text-sm font-semibold uppercase tracking-wide">Impact Global</div>
                                    <div class="text-3xl font-black text-white">Vérifié & Mesurable</div>
                                </div>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-center gap-3 text-white p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/20 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-emerald-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-semibold text-lg">Transparence totale</span>
                                </div>
                                <div class="flex items-center gap-3 text-white p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/20 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-emerald-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-semibold text-lg">Due diligence rigoureuse</span>
                                </div>
                                <div class="flex items-center gap-3 text-white p-4 bg-white/10 backdrop-blur-sm rounded-xl hover:bg-white/20 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-emerald-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-semibold text-lg">Suivi en temps réel</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Stats Cards -->
                    <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl p-8 shadow-2xl hover:rotate-3 hover:scale-105 transition-all duration-300 cursor-pointer">
                        <div class="text-center">
                            <div class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-600 mb-2">98%</div>
                            <div class="text-sm text-gray-600 font-bold">Satisfaction client</div>
                            <div class="flex items-center justify-center gap-1 mt-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20" x-data="{show: false}" x-init="setTimeout(() => show = true, 600)">
            <div class="inline-flex items-center gap-2 px-6 py-2 bg-emerald-100 text-emerald-700 rounded-full font-bold text-sm mb-6 transition-all duration-700"
                 :class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-95'">
                Nos Valeurs
            </div>
            <h2 class="text-5xl md:text-6xl font-black mb-6 leading-tight transition-all duration-700 delay-100"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <span class="text-gray-900">Ce qui nous </span>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600">guide</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto transition-all duration-700 delay-200"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Des principes forts au cœur de notre démarche
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8" x-data="{show: false}" x-init="setTimeout(() => show = true, 800)">
            <!-- Value 1 -->
            <div class="group bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-gray-100 hover:border-emerald-200 transition-all duration-700"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-emerald-500/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors">
                    Transparence
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Chaque information compte. Nous vous donnons accès à toutes les données nécessaires pour prendre des décisions éclairées.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="group bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-gray-100 hover:border-teal-200 md:mt-8 transition-all duration-700 delay-100"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <div class="w-20 h-20 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-teal-500/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-teal-600 transition-colors">
                    Impact mesurable
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Des indicateurs précis pour suivre l'impact réel de vos investissements sur la société et l'environnement.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="group bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-2 border-gray-100 hover:border-cyan-200 md:mt-16 transition-all duration-700 delay-200"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-cyan-500/30">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-cyan-600 transition-colors">
                    Communauté
                </h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Rejoignez un réseau d'investisseurs passionnés qui partagent votre vision d'un futur durable.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block px-6 py-2 bg-teal-100 text-teal-700 rounded-full font-bold text-sm mb-6">
                Notre Méthode
            </div>
            <h2 class="text-5xl md:text-6xl font-black mb-6 leading-tight">
                <span class="text-gray-900">Notre processus de </span>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600">sélection</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Chaque projet est rigoureusement évalué selon des critères stricts d'impact et de viabilité
            </p>
        </div>

        <div class="relative">
            <!-- Connection Line -->
            <div class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 -translate-y-1/2 opacity-20"></div>

            <div class="grid md:grid-cols-4 gap-8 relative">
                <!-- Step 1 -->
                <div class="text-center group">
                    <div class="relative inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-2xl mb-8 group-hover:scale-110 transition-transform duration-300 shadow-2xl shadow-emerald-500/30 group-hover:shadow-emerald-500/50">
                        <span class="text-4xl font-black text-white">1</span>
                        <div class="absolute inset-0 rounded-2xl bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">Candidature</h4>
                    <p class="text-gray-600 leading-relaxed">Les porteurs de projets soumettent leur dossier complet avec tous les documents requis</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center group">
                    <div class="relative inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-teal-600 to-cyan-600 rounded-2xl mb-8 group-hover:scale-110 transition-transform duration-300 shadow-2xl shadow-teal-500/30 group-hover:shadow-teal-500/50">
                        <span class="text-4xl font-black text-white">2</span>
                        <div class="absolute inset-0 rounded-2xl bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">Analyse</h4>
                    <p class="text-gray-600 leading-relaxed">Évaluation approfondie de l'impact ESG et de la viabilité financière du projet</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center group">
                    <div class="relative inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-cyan-600 to-emerald-600 rounded-2xl mb-8 group-hover:scale-110 transition-transform duration-300 shadow-2xl shadow-cyan-500/30 group-hover:shadow-cyan-500/50">
                        <span class="text-4xl font-black text-white">3</span>
                        <div class="absolute inset-0 rounded-2xl bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors">Validation</h4>
                    <p class="text-gray-600 leading-relaxed">Notre comité d'experts valide les projets qui répondent à nos critères d'excellence</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center group">
                    <div class="relative inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-2xl mb-8 group-hover:scale-110 transition-transform duration-300 shadow-2xl shadow-emerald-500/30 group-hover:shadow-emerald-500/50">
                        <span class="text-4xl font-black text-white">4</span>
                        <div class="absolute inset-0 rounded-2xl bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-black text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">Lancement</h4>
                    <p class="text-gray-600 leading-relaxed">Publication du projet sur la plateforme et ouverture de la campagne d'investissement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- Gradient Overlays -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-1/2 h-1/2 bg-emerald-500/20 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-1/2 h-1/2 bg-teal-500/20 blur-[120px] animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 text-center z-10" x-data="{show: false}" x-init="setTimeout(() => show = true, 200)">
        <div class="inline-block px-6 py-2 bg-white/10 backdrop-blur-sm text-white rounded-full font-semibold mb-8 border border-white/20">
            Rejoignez-nous
        </div>

        <h2 class="text-5xl md:text-6xl font-black mb-6 leading-tight transition-all duration-700"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <span class="text-white">Rejoignez le </span>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">mouvement</span>
        </h2>
        
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed transition-all duration-700 delay-100"
           :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            Devenez acteur du changement en investissant dans des projets qui ont du sens et façonnent l'avenir
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mb-12 transition-all duration-700 delay-200"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <a href="{{ route('projects') }}"
               class="group px-10 py-5 bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-2xl font-bold text-lg shadow-2xl shadow-emerald-500/50 hover:shadow-emerald-500/70 hover:scale-[1.02] transition-all duration-300">
                <span class="flex items-center gap-2">
                    Découvrir les projets
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
            </a>

            <a href="#contact"
               class="px-10 py-5 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-bold text-lg border-2 border-white/20 hover:bg-white/20 hover:border-white/40 hover:scale-[1.02] transition-all duration-300">
                Nous contacter
            </a>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Inscription gratuite</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Sans engagement</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Plateforme sécurisée</span>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes scroll {
    0% { transform: translateY(0); opacity: 0; }
    40% { opacity: 1; }
    100% { transform: translateY(16px); opacity: 0; }
}

.animate-scroll {
    animation: scroll 2s ease-in-out infinite;
}
</style>
@endsection