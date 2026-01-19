@extends('layouts.app')

@section('title', 'Projets - Impact Invest')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
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
                <span class="text-sm font-semibold text-white tracking-wide">Projets Certifiés · Impact Vérifié</span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6 transition-all duration-700 delay-100"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                <span class="text-white">
                    Découvrez nos
                </span>
                <br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">
                    projets d'impact
                </span>
            </h1>

            <!-- Description -->
            <p class="text-xl md:text-2xl text-gray-300 leading-relaxed max-w-3xl mx-auto transition-all duration-700 delay-200"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                Investissez dans des projets à fort impact social et environnemental, rigoureusement sélectionnés et audités
            </p>

            <!-- Add Project Button (Auth) -->
            @auth
                <div class="mt-10 transition-all duration-700 delay-300"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-10'">
                    <a href="{{ route('projects.create') }}"
                       class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-2xl font-bold text-lg shadow-2xl shadow-emerald-500/50 hover:shadow-emerald-500/70 hover:scale-[1.02] transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <span>Ajouter un projet</span>
                    </a>
                </div>
            @endauth
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section class="bg-white py-12 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center group cursor-pointer">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-600 mb-2 
                            group-hover:scale-110 transition-transform duration-300">{{ count($projects) }}</div>
                <div class="text-gray-600 font-medium">Projets actifs</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-teal-600 to-cyan-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">100%</div>
                <div class="text-gray-600 font-medium">Vérifiés</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-emerald-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">98%</div>
                <div class="text-gray-600 font-medium">Satisfaction</div>
            </div>
            <div class="text-center group cursor-pointer">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-cyan-600 mb-2
                            group-hover:scale-110 transition-transform duration-300">5.2K</div>
                <div class="text-gray-600 font-medium">Investisseurs</div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="py-32 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        
        @if($projects->isEmpty())
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Aucun projet disponible</h3>
                <p class="text-gray-600 mb-8">Les projets d'investissement apparaîtront ici</p>
                @auth
                    <a href="{{ route('projects.create') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-semibold hover:bg-emerald-700 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Créer le premier projet
                    </a>
                @endauth
            </div>
        @else
            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    @php
                        $progress = $project->goal_amount > 0
                            ? min(100, round(($project->raised_amount / $project->goal_amount) * 100))
                            : 0;
                    @endphp

                    <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 overflow-hidden border-2 border-transparent hover:border-emerald-200">
                        
                        <!-- Project Image -->
                        <div class="relative h-56 overflow-hidden">
                            @if($project->image)
                                <img src="{{ asset('storage/'.$project->image) }}"
                                     alt="{{ $project->title }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-emerald-100 to-teal-100 flex items-center justify-center">
                                    <svg class="w-20 h-20 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Progress Badge -->
                            <div class="absolute top-4 right-4 px-4 py-2 bg-white/95 backdrop-blur-sm rounded-full shadow-lg">
                                <span class="text-sm font-black text-emerald-600">{{ $progress }}%</span>
                            </div>

                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-8">
                            <!-- Title -->
                            <a href="{{ route('projects.show', $project) }}">
                                <h3 class="text-2xl font-black text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                                    {{ $project->title }}
                                </h3>
                            </a>

                            <!-- Description -->
                            <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                                {{ Str::limit($project->description, 120) }}
                            </p>

                            <!-- Financial Info -->
                            <div class="space-y-3 mb-6">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-semibold text-gray-700">Objectif</span>
                                    <span class="text-sm font-black text-gray-900">{{ number_format($project->goal_amount, 0, ',', ' ') }} FCFA</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-600">Collecté</span>
                                    <span class="text-sm font-bold text-emerald-600">{{ number_format($project->raised_amount, 0, ',', ' ') }} FCFA</span>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="mb-6">
                                <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                    <div class="h-3 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full transition-all duration-1000 shadow-lg shadow-emerald-500/50"
                                         style="width: {{ $progress }}%"></div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-xs font-semibold text-emerald-600">{{ $progress }}% financé</span>
                                    <span class="text-xs text-gray-500">{{ number_format($project->goal_amount - $project->raised_amount, 0, ',', ' ') }} FCFA restants</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-3">
                                <a href="{{ route('projects.show', $project) }}"
                                   class="flex-1 px-4 py-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-xl font-bold text-sm text-center hover:from-emerald-700 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                                    Voir le projet
                                </a>

                                @auth
                                    <!-- Edit & Delete Buttons -->
                                    <div class="flex gap-2">
                                        <a href="{{ route('projects.edit', $project) }}"
                                           class="px-4 py-3 bg-gray-100 text-gray-700 rounded-xl font-semibold text-sm hover:bg-gray-200 transition-all duration-300"
                                           title="Éditer">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>

                                        <form action="{{ route('projects.destroy', $project) }}"
                                              method="POST"
                                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="px-4 py-3 bg-red-50 text-red-600 rounded-xl font-semibold text-sm hover:bg-red-100 transition-all duration-300"
                                                    title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 text-center z-10">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-6">
            Un projet à proposer ?
        </h2>
        <p class="text-xl md:text-2xl text-white/90 mb-12 max-w-3xl mx-auto">
            Soumettez votre projet à impact et bénéficiez du soutien de notre communauté d'investisseurs engagés
        </p>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
            @auth
                <a href="{{ route('projects.create') }}"
                   class="group px-10 py-5 bg-white text-emerald-700 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-white/30 hover:scale-105 transition-all duration-300">
                    <span class="flex items-center gap-2">
                        Soumettre un projet
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
            @else
                <a href="{{ route('register') }}"
                   class="group px-10 py-5 bg-white text-emerald-700 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-white/30 hover:scale-105 transition-all duration-300">
                    <span class="flex items-center gap-2">
                        Créer un compte
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </a>
            @endauth

            <a href="{{ route('home') }}"
               class="px-10 py-5 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-bold text-lg border-2 border-white/30 hover:bg-white/20 hover:border-white/50 hover:scale-105 transition-all duration-300">
                Retour à l'accueil
            </a>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-sm mt-12">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Projets audités</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Impact vérifié</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                <span>Transparence totale</span>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection