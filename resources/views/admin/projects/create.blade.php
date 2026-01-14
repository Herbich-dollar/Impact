@extends('layouts.app')

@section('title', 'Créer un projet')

@section('content')
<!-- Hero Section avec animations -->
<section class="relative min-h-screen flex items-center bg-gradient-to-br from-slate-50 via-white to-emerald-50 overflow-hidden py-20">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-cyan-400/10 rounded-full blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-emerald-500 rounded-full animate-float"></div>
        <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-teal-500 rounded-full animate-float animation-delay-1000"></div>
        <div class="absolute bottom-1/3 left-1/2 w-2 h-2 bg-cyan-500 rounded-full animate-float animation-delay-2000"></div>
        <div class="absolute top-1/2 right-1/4 w-2 h-2 bg-emerald-400 rounded-full animate-float animation-delay-3000"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-6 w-full z-10" x-data="{show: false}" x-init="setTimeout(() => show = true, 200)">
        <!-- Header -->
        <div class="text-center mb-12 space-y-6">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-lg border border-emerald-100 transition-all duration-700"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-4'">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-sm font-medium text-gray-700">Nouveau projet d'impact</span>
            </div>

            <!-- Title -->
            <h1 class="text-5xl md:text-7xl font-black leading-tight transition-all duration-700 delay-100"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 animate-gradient">
                    Créer votre projet
                </span>
            </h1>

            <p class="text-lg text-gray-600 max-w-2xl mx-auto transition-all duration-700 delay-300"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Partagez votre vision et transformez vos idées en réalité avec le soutien de notre communauté
            </p>
        </div>

        <!-- Form -->
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12 transition-all duration-700 delay-500"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             x-data="{ 
                imagePreview: null,
                fileName: '',
                handleFileUpload(event) {
                    const file = event.target.files[0];
                    if (file) {
                        this.fileName = file.name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.imagePreview = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                },
                removeImage() {
                    this.imagePreview = null;
                    this.fileName = '';
                    document.getElementById('image-upload').value = '';
                }
             }">
            <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Photo du projet -->
                <div class="group">
                    <label class="block text-sm font-bold text-gray-700 mb-3 transition-colors group-focus-within:text-emerald-600">
                        📸 Photo du projet
                    </label>
                    
                    <!-- Zone de preview -->
                    <div class="relative" x-show="!imagePreview">
                        <input type="file" 
                               id="image-upload"
                               name="image" 
                               accept="image/*"
                               @change="handleFileUpload"
                               class="hidden">
                        
                        <label for="image-upload" 
                               class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed border-gray-300 rounded-2xl cursor-pointer bg-gradient-to-br from-gray-50 to-emerald-50/30 hover:border-emerald-400 hover:bg-emerald-50/50 transition-all duration-300 group">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-16 h-16 mb-4 text-gray-400 group-hover:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                                <p class="mb-2 text-sm font-semibold text-gray-600 group-hover:text-emerald-600 transition-colors">
                                    <span>Cliquez pour télécharger</span> ou glissez-déposez
                                </p>
                                <p class="text-xs text-gray-500">PNG, JPG, WEBP jusqu'à 10MB</p>
                            </div>
                        </label>
                    </div>

                    <!-- Image preview -->
                    <div x-show="imagePreview" 
                         class="relative rounded-2xl overflow-hidden border-2 border-emerald-200 shadow-lg"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100">
                        <img :src="imagePreview" 
                             alt="Preview" 
                             class="w-full h-64 object-cover">
                        
                        <!-- Overlay avec infos -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <div class="flex items-center justify-between w-full">
                                <div class="flex items-center gap-2 text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm font-medium truncate max-w-xs" x-text="fileName"></span>
                                </div>
                                <button type="button"
                                        @click="removeImage"
                                        class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition-colors shadow-lg hover:scale-105 transform duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Titre -->
                <div class="group">
                    <label class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-emerald-600">
                        📋 Titre du projet
                    </label>
                    <input name="title" 
                           type="text"
                           placeholder="Ex: Ferme solaire communautaire"
                           required
                           class="w-full border-2 border-gray-200 p-4 rounded-2xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300 hover:border-gray-300 bg-white shadow-sm">
                </div>

                <!-- Description -->
                <div class="group">
                    <label class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-teal-600">
                        ✍️ Description
                    </label>
                    <textarea name="description" 
                              rows="6" 
                              placeholder="Décrivez votre projet, son impact et ses objectifs..."
                              required
                              class="w-full border-2 border-gray-200 p-4 rounded-2xl focus:border-teal-500 focus:ring-4 focus:ring-teal-500/20 transition-all duration-300 hover:border-gray-300 bg-white shadow-sm resize-none"></textarea>
                </div>

                <!-- Grid pour Goal et Status -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Goal Amount -->
                    <div class="group">
                        <label class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-cyan-600">
                            💰 Objectif de financement
                        </label>
                        <div class="relative">
                            <input name="goal_amount" 
                                   type="number" 
                                   step="0.01"
                                   min="0"
                                   placeholder="50000"
                                   required
                                   class="w-full border-2 border-gray-200 p-4 pr-12 rounded-2xl focus:border-cyan-500 focus:ring-4 focus:ring-cyan-500/20 transition-all duration-300 hover:border-gray-300 bg-white shadow-sm">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 font-semibold">FCFA</span>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="group">
                        <label class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-emerald-600">
                            📊 Statut
                        </label>
                        <select name="status" 
                                class="w-full border-2 border-gray-200 p-4 rounded-2xl focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300 hover:border-gray-300 bg-white shadow-sm appearance-none cursor-pointer"
                                style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3e%3cpolyline points=\'6 9 12 15 18 9\'%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;">
                            <option value="En cours">🚀 En cours</option>
                            <option value="Terminé">✅ Terminé</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="group relative w-full px-8 py-5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-2xl font-bold text-lg
                                   shadow-xl shadow-emerald-500/30 hover:shadow-2xl hover:shadow-emerald-500/40 
                                   hover:scale-[1.02] transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center gap-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Créer le projet
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-teal-600 to-cyan-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>

                <!-- Info Box -->
                <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl p-6 border border-emerald-100">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 text-2xl">💡</div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Conseils pour un projet réussi</h4>
                            <p class="text-sm text-gray-600">
                                Soyez clair sur votre vision, détaillez l'impact attendu et définissez des objectifs mesurables pour maximiser vos chances de financement.
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        
</section>

<style>
@keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

@keyframes float {
    0%, 100% { transform: translateY(0); opacity: 0.5; }
    50% { transform: translateY(-20px); opacity: 1; }
}

@keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 3s ease infinite;
}

.animation-delay-1000 {
    animation-delay: 1s;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-3000 {
    animation-delay: 3s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>
@endsection

