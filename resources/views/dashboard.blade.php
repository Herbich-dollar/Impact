@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<section class="relative min-h-screen flex flex-col bg-gradient-to-br from-slate-50 via-white to-emerald-50 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-black text-gray-900 transition-all duration-700 delay-100"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Dashboard Admin
            </h1>
            <p class="text-gray-600 text-lg md:text-xl transition-all duration-700 delay-300"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Gérez vos projets, images et suivez les contributions
            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto transition-all duration-700 delay-500"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <div class="p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 to-teal-600 mb-2">
                    {{ \App\Models\Project::count() }}
                </div>
                <div class="text-gray-600 font-semibold">Projets</div>
            </div>
            <div class="p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-teal-600 to-cyan-600 mb-2">
                    {{ \App\Models\Donation::sum('amount') }}FCFA
                </div>
                <div class="text-gray-600 font-semibold">Montant collecté</div>
            </div>
            <div class="p-6 bg-gradient-to-r from-cyan-50 to-emerald-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-600 to-emerald-600 mb-2">
                    {{ \App\Models\Donation::count() }}
                </div>
                <div class="text-gray-600 font-semibold">Dons</div>
            </div>
        </div>

        <!-- Table of Projects with Images & Progress -->
        <div class="mt-16 max-w-7xl mx-auto bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg p-6 overflow-x-auto transition-all duration-700 delay-700"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Projets</h2>
                <a href="{{ route('projects.create') }}"
                   class="px-4 py-2 bg-emerald-600 text-white rounded-full font-semibold hover:bg-emerald-700 transition-colors">
                    + Ajouter un projet
                </a>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Objectif</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Collecté</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progression</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach(\App\Models\Project::all() as $project)
                        @php
                            $progress = $project->goal_amount > 0 ? min(100, round(($project->raised_amount / $project->goal_amount) * 100)) : 0;
                        @endphp
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Image" class="w-20 h-12 object-cover rounded-md shadow-sm">
                                @else
                                    <div class="w-20 h-12 bg-gray-200 rounded-md flex items-center justify-center text-gray-400">N/A</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->goal_amount }}FCFA</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $project->raised_amount }}FCFA</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                    <div class="h-3 bg-emerald-500 rounded-full transition-all duration-1000" style="width: {{ $progress }}%"></div>
                                </div>
                                <span class="text-xs text-gray-500 mt-1 inline-block">{{ $progress }}%</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                    {{ $project->status == 'Ouvert' ? 'bg-emerald-100 text-emerald-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $project->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('projects.edit', $project) }}"
                                   class="text-teal-600 hover:text-teal-800 font-semibold">Éditer</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-800 font-semibold"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
@keyframes blob {0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(30px,-50px) scale(1.1);}66%{transform:translate(-20px,20px) scale(0.9);}}
@keyframes float {0%,100%{transform:translateY(0); opacity:0.5;}50%{transform:translateY(-20px); opacity:1;}}
@keyframes gradient {0%,100%{background-position:0% 50%;}50%{background-position:100% 50%;}}
.animate-blob {animation:blob 7s infinite;}
.animate-float {animation:float 3s ease-in-out infinite;}
.animate-gradient {background-size:200% 200%; animation:gradient 3s ease infinite;}
.animation-delay-1000 {animation-delay:1s;}
.animation-delay-2000 {animation-delay:2s;}
.animation-delay-4000 {animation-delay:4s;}
</style>
@endsection
