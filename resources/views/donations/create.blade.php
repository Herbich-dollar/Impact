@extends('layouts.app')

@section('title', 'Investir')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-slate-900 to-emerald-900 text-white py-24">
    <div class="max-w-xl mx-auto px-6">

        <h1 class="text-4xl font-black mb-8">
            Investir dans <span class="text-emerald-400">{{ $project->title }}</span>
        </h1>

        <form method="POST" action="{{ route('projects.invest.store', $project) }}"
              class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl">
            @csrf

            <label class="block mb-4">
                <span class="text-sm font-semibold">Montant (FCFA)</span>
                <input type="number" name="amount" min="1" required
                       class="mt-2 w-full px-4 py-3 rounded-xl bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </label>

            <button
                class="w-full mt-6 px-6 py-4 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl font-bold text-lg hover:scale-105 transition">
                Confirmer l’investissement
            </button>
        </form>

    </div>
</section>
@endsection
