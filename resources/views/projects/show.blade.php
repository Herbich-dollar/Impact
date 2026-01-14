@extends('layouts.app')

@section('title', $project->title)

@section('content')
<section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 text-white overflow-hidden">

    <!-- Background glow -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-96 h-96 bg-emerald-500/20 blur-3xl rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-teal-500/20 blur-3xl rounded-full animate-pulse"></div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6 py-24 z-10"
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 200)">

        <!-- Back -->
        <a href="{{ route('projects') }}"
           class="inline-block mb-8 text-emerald-400 hover:underline">
            ← Retour aux projets
        </a>

        <!-- Image -->
        @if($project->image)
            <img src="{{ asset('storage/'.$project->image) }}"
                 class="w-full h-96 object-cover rounded-3xl shadow-2xl mb-12 transition-all duration-700"
                 :class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-95'">
        @endif

        <!-- Content -->
        <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-10 shadow-2xl transition-all duration-700 delay-200"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

            <h1 class="text-4xl md:text-5xl font-black mb-6">
                {{ $project->title }}
            </h1>

            <p class="text-gray-200 text-lg leading-relaxed mb-8">
                {{ $project->description }}
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="bg-white/10 rounded-2xl p-6">
                    <div class="text-sm text-gray-300 mb-1">Objectif</div>
                    <div class="text-2xl font-black">
                        {{ number_format($project->goal_amount, 0, ',', ' ') }} FCFA
                    </div>
                </div>

                <div class="bg-white/10 rounded-2xl p-6">
                    <div class="text-sm text-gray-300 mb-1">Collecté</div>
                    <div class="text-2xl font-black">
                        {{ number_format($project->raised_amount ?? 0, 0, ',', ' ') }} FCFA
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="mt-10">
    <a href="{{ route('projects.invest', $project) }}"
       class="inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-emerald-500 to-teal-500 text-white rounded-2xl font-black text-lg shadow-2xl hover:shadow-emerald-500/50 hover:scale-105 transition-all duration-300">
        
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8c-1.657 0-3 1.343-3 3m0 0c0 1.657 1.343 3 3 3m0-6c1.657 0 3 1.343 3 3m-3-3v-3m0 12v-3" />
        </svg>

        Investir dans ce projet
    </a>
</div>

            
        </div>
    </div>
</section>
@endsection
