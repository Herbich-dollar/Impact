@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Hero Section -->
<section class="relative py-32 overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- Gradient Overlays -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-1/2 h-1/2 bg-emerald-500/20 blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-teal-500/20 blur-[120px] animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 text-center z-10" x-data="{show: false}" x-init="setTimeout(() => show = true, 300)">
        <div class="inline-flex items-center gap-3 px-5 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-8 transition-all duration-700"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="text-sm font-semibold text-white tracking-wide">Réponse sous 24h garantie</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight transition-all duration-700 delay-100"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">
                Contactez-nous
            </span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto transition-all duration-700 delay-200"
           :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            Une question ? Un projet ? Notre équipe est à votre écoute pour vous accompagner dans votre démarche d'investissement responsable
        </p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Left: Contact Info -->
            <div class="space-y-10" x-data="{show: false}" x-init="setTimeout(() => show = true, 400)">
                <div class="transition-all duration-700"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <div class="inline-block px-5 py-2 bg-emerald-100 text-emerald-700 rounded-full font-bold text-sm mb-6">
                        Écrivez-nous
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 leading-tight">
                        Parlons de votre projet
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Que vous soyez investisseur ou porteur de projet, nous sommes là pour répondre à toutes vos questions et vous guider dans votre démarche d'investissement responsable.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-5 transition-all duration-700 delay-200"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <!-- Email -->
                    <div class="group flex items-start gap-5 p-6 bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-2 border-emerald-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 mb-2 text-lg">Email</h3>
                            <a href="mailto:contact@impactinvest.com" class="text-emerald-600 hover:text-teal-600 transition-colors font-bold text-lg">
                                contact@impactinvest.com
                            </a>
                            <p class="text-sm text-gray-600 mt-1">Réponse en moins de 24h</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="group flex items-start gap-5 p-6 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-2 border-teal-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-teal-600 to-cyan-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 mb-2 text-lg">Téléphone</h3>
                            <a href="tel:+33123456789" class="text-teal-600 hover:text-cyan-600 transition-colors font-bold text-lg">
                                +33 1 23 45 67 89
                            </a>
                            <p class="text-sm text-gray-600 mt-1">Lun-Ven: 9h-18h</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="group flex items-start gap-5 p-6 bg-gradient-to-br from-cyan-50 to-emerald-50 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-2 border-cyan-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-cyan-600 to-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-black text-gray-900 mb-2 text-lg">Siège social</h3>
                            <p class="text-gray-700 font-semibold text-lg leading-relaxed">
                                123 Avenue de l'Innovation<br>
                                75008 Paris, France
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="pt-6 transition-all duration-700 delay-400"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                    <h3 class="text-lg font-black text-gray-900 mb-5">Suivez-nous</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-xl flex items-center justify-center text-emerald-600 hover:from-emerald-600 hover:to-teal-600 hover:text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-14 h-14 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center text-teal-600 hover:from-teal-600 hover:to-cyan-600 hover:text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-14 h-14 bg-gradient-to-br from-cyan-100 to-emerald-100 rounded-xl flex items-center justify-center text-cyan-600 hover:from-cyan-600 hover:to-emerald-600 hover:text-white hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div x-data="{show: false, formSubmitted: false}" x-init="setTimeout(() => show = true, 600)">
                <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 rounded-3xl p-10 shadow-2xl overflow-hidden transition-all duration-700"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'">
                    <!-- Animated Background -->
                    <div class="absolute inset-0 opacity-30">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/30 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-teal-500/30 rounded-full blur-3xl"></div>
                    </div>

                    <form @submit.prevent="formSubmitted = true" class="relative space-y-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-emerald-400 uppercase tracking-wide">Nom complet *</label>
                            <input 
                                type="text"
                                required
                                placeholder="Jean Dupont"
                                class="w-full bg-slate-800/50 backdrop-blur-sm border-2 border-slate-700/50 focus:border-emerald-500 text-white rounded-xl px-5 py-4 outline-none transition-all duration-300 placeholder:text-gray-500 font-semibold"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-emerald-400 uppercase tracking-wide">Email *</label>
                            <input 
                                type="email"
                                required
                                placeholder="jean.dupont@exemple.com"
                                class="w-full bg-slate-800/50 backdrop-blur-sm border-2 border-slate-700/50 focus:border-emerald-500 text-white rounded-xl px-5 py-4 outline-none transition-all duration-300 placeholder:text-gray-500 font-semibold"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-emerald-400 uppercase tracking-wide">Téléphone</label>
                            <input 
                                type="tel"
                                placeholder="+33 6 12 34 56 78"
                                class="w-full bg-slate-800/50 backdrop-blur-sm border-2 border-slate-700/50 focus:border-emerald-500 text-white rounded-xl px-5 py-4 outline-none transition-all duration-300 placeholder:text-gray-500 font-semibold"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-emerald-400 uppercase tracking-wide">Sujet *</label>
                            <select class="w-full bg-slate-800/50 backdrop-blur-sm border-2 border-slate-700/50 focus:border-emerald-500 text-white rounded-xl px-5 py-4 outline-none transition-all duration-300 font-semibold">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="investir">Investir dans un projet</option>
                                <option value="soumettre">Soumettre un projet</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre question</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-emerald-400 uppercase tracking-wide">Message *</label>
                            <textarea 
                                rows="5"
                                required
                                placeholder="Décrivez votre projet ou posez votre question..."
                                class="w-full bg-slate-800/50 backdrop-blur-sm border-2 border-slate-700/50 focus:border-emerald-500 text-white rounded-xl px-5 py-4 outline-none transition-all duration-300 resize-none placeholder:text-gray-500 font-semibold"
                            ></textarea>
                        </div>

                        <button 
                            type="submit"
                            class="group w-full relative px-8 py-5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-xl font-black text-lg shadow-2xl shadow-emerald-500/50 hover:shadow-emerald-500/70 hover:scale-[1.02] transition-all duration-300 overflow-hidden"
                        >
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Envoyer le message
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-teal-600 to-cyan-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>
                    </form>

                    <!-- Success Message -->
                    <div x-show="formSubmitted" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="absolute inset-0 bg-slate-900/98 backdrop-blur-md rounded-3xl flex items-center justify-center p-10">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full mb-8 animate-bounce shadow-2xl">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-black text-white mb-4">Message envoyé avec succès !</h3>
                            <p class="text-gray-300 text-lg mb-8 max-w-md">Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais.</p>
                            <button @click="formSubmitted = false" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-xl font-bold text-lg hover:bg-white/20 transition-all duration-300 border-2 border-white/20 hover:border-white/40">
                                Envoyer un autre message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-block px-6 py-2 bg-teal-100 text-teal-700 rounded-full font-bold text-sm mb-6">
                FAQ
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                Questions fréquentes
            </h2>
            <p class="text-xl text-gray-600">
                Les réponses aux questions les plus courantes
            </p>
        </div>

        <div class="space-y-4" x-data="{openFaq: null}">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-100 hover:border-emerald-200 transition-all duration-300">
                <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full flex items-center justify-between p-8 text-left hover:bg-gray-50 transition-colors duration-300">
                    <span class="font-black text-gray-900 text-lg pr-4">Comment investir dans un projet ?</span>
                    <svg class="w-6 h-6 text-emerald-600 transition-transform duration-300 flex-shrink-0" :class="openFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="openFaq === 1" x-collapse class="px-8 pb-8">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Il vous suffit de créer un compte gratuitement, parcourir les projets disponibles selon vos critères, et cliquer sur "Investir" sur le projet qui vous intéresse. Vous pourrez alors choisir le montant de votre investissement et finaliser la transaction de manière totalement sécurisée.
                    </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-100 hover:border-emerald-200 transition-all duration-300">
                <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full flex items-center justify-between p-8 text-left hover:bg-gray-50 transition-colors duration-300">
                    <span class="font-black text-gray-900 text-lg pr-4">Quel est le montant minimum d'investissement ?</span>
                    <svg class="w-6 h-6 text-emerald-600 transition-transform duration-300 flex-shrink-0" :class="openFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="openFaq === 2" x-collapse class="px-8 pb-8">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Le montant minimum varie selon les projets, mais il commence généralement à partir de 100FCFA. Nous croyons fermement que l'investissement responsable doit être accessible à tous, quel que soit votre budget.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-100 hover:border-emerald-200 transition-all duration-300">
                <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full flex items-center justify-between p-8 text-left hover:bg-gray-50 transition-colors duration-300">
                    <span class="font-black text-gray-900 text-lg pr-4">Comment soumettre mon projet ?</span>
                    <svg class="w-6 h-6 text-emerald-600 transition-transform duration-300 flex-shrink-0" :class="openFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="openFaq === 3" x-collapse class="px-8 pb-8">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Utilisez le formulaire ci-dessus en sélectionnant "Soumettre un projet" comme sujet, ou rendez-vous directement sur notre page de soumission dédiée. Notre équipe d'experts évaluera votre dossier avec attention et vous recontactera sous 5 jours ouvrés maximum.
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-100 hover:border-emerald-200 transition-all duration-300">
                <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full flex items-center justify-between p-8 text-left hover:bg-gray-50 transition-colors duration-300">
                    <span class="font-black text-gray-900 text-lg pr-4">Quels sont les frais de la plateforme ?</span>
                    <svg class="w-6 h-6 text-emerald-600 transition-transform duration-300flex-shrink-0" :class="openFaq === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="openFaq === 4" x-collapse class="px-8 pb-8">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Nous appliquons une commission de 5% sur les fonds collectés pour les porteurs de projets. Pour les investisseurs, l'inscription et la navigation sur la plateforme sont totalement gratuites. Aucun frais caché.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection