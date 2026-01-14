@extends('layouts.app')

@section('title', 'Projets')

@section('content')
<section
    class="relative min-h-screen flex flex-col bg-gradient-to-br from-slate-50 via-white to-emerald-50 overflow-hidden">

    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 z-10"
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 200)">

        <!-- Title -->
        <div class="text-center mb-14">
            <h1 class="text-5xl md:text-6xl font-black text-gray-900 transition-all duration-700"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Nos Projets
            </h1>
            <p class="text-gray-600 text-lg mt-4 transition-all duration-700 delay-200"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Découvrez et soutenez des projets porteurs d’impact
            </p>
        </div>

        <!-- Bouton ajouter -->
        @auth
            <div class="flex justify-center mb-12 transition-all duration-700 delay-300"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <a href="{{ route('projects.create') }}"
                   class="px-6 py-3 bg-emerald-600 text-white rounded-full font-semibold shadow-lg hover:bg-emerald-700 transition">
                    + Ajouter un projet
                </a>
            </div>
        @endauth

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 transition-all duration-700 delay-500"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

            @foreach($projects as $project)
                @php
                    $progress = $project->goal_amount > 0
                        ? min(100, round(($project->raised_amount / $project->goal_amount) * 100))
                        : 0;
                @endphp

                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">

                    <!-- Image -->
                    @if($project->image)
                        <img src="{{ asset('storage/'.$project->image) }}"
                             alt="{{ $project->title }}"
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                            Aucune image
                        </div>
                    @endif

                    <div class="p-6">
                        <a href="{{ route('projects.show', $project) }}">
    <h2 class="text-xl font-bold text-gray-900 hover:text-emerald-600 transition">
        {{ $project->title }}
    </h2>
</a>


                        <p class="text-gray-600 mb-4">
                            {{ Str::limit($project->description, 120) }}
                        </p>

                        <!-- Stats -->
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span>Objectif</span>
                            <span>{{ number_format($project->goal_amount, 0, ',', ' ') }} FCFA</span>
                        </div>

                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Collecté</span>
                            <span>{{ number_format($project->raised_amount, 0, ',', ' ') }} FCFA</span>
                        </div>

                        <!-- Progress bar -->
                        <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden mb-2">
                            <div class="h-3 bg-emerald-500 rounded-full transition-all duration-1000"
                                 style="width: {{ $progress }}%"></div>
                        </div>

                        <div class="text-xs text-gray-500 mb-4">
                            {{ $progress }}% atteint
                        </div>

                        <!-- Actions -->
                        @auth
                            <div class="flex justify-end gap-4 text-sm font-semibold">
                                <a href="{{ route('projects.edit', $project) }}"
                                   class="text-teal-600 hover:text-teal-800">
                                    Éditer
                                </a>

                                <form action="{{ route('projects.destroy', $project) }}"
                                      method="POST"
                                      onsubmit="return confirm('Supprimer ce projet ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:text-red-800">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
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
</style>
@endsection
