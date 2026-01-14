<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Donation;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * PAGE PUBLIQUE
     * Liste des projets
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects', compact('projects'));
    }


    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * PAGE ADMIN
     * Liste des projets
     */
    public function adminIndex()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * PAGE ADMIN
     * Formulaire création + stats dynamiques
     */
    public function create()
    {
        $activeProjects = Project::where('status', 'En cours')->count();

        $totalProjects = Project::count();
        $completedProjects = Project::where('status', 'Terminé')->count();

        $successRate = $totalProjects > 0
            ? round(($completedProjects / $totalProjects) * 100)
            : 0;

        $donatorsCount = Donation::distinct('user_id')->count('user_id');

        return view('admin.projects.create', compact(
            'activeProjects',
            'successRate',
            'donatorsCount'
        ));
    }

    /**
     * PAGE ADMIN
     * Enregistrer un projet
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:0',
            'status'      => 'required|string',
            'image'       => 'nullable|image|max:10240',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'goal_amount'   => $request->goal_amount,
            'status'        => $request->status,
            'image'         => $imagePath,
            'raised_amount' => 0,
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Projet créé avec succès');
    }

    /**
     * PAGE ADMIN
     * Formulaire édition
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * PAGE ADMIN
     * Mise à jour
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:0',
            'status'      => 'required|string',
        ]);

        $project->update($request->only([
            'title',
            'description',
            'goal_amount',
            'status',
        ]));

        return redirect()
            ->route('dashboard')
            ->with('success', 'Projet mis à jour');
    }

    /**
     * PAGE ADMIN
     * Suppression
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Projet supprimé');
    }
}
