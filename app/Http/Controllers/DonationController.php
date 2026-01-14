<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Affiche le formulaire d'investissement
     * (utilisateur connecté uniquement)
     */
    public function create(Project $project)
    {
        return view('donations.create', compact('project'));
    }

    /**
     * Enregistre un investissement
     */
    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        // Création de l'investissement
        Donation::create([
            'project_id' => $project->id,
            'name'       => auth()->user()->name,
            'email'      => auth()->user()->email,
            'amount'     => $validated['amount'],
        ]);

        // Mise à jour du montant collecté
        $project->increment('raised_amount', $validated['amount']);

        return redirect()
            ->route('projects.show', $project)
            ->with('success', 'Merci pour votre investissement !');
    }
}
