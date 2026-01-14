<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Donation;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripePaymentController extends Controller
{
    public function checkout(Request $request, Project $project)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $project->title,
                        'description' => 'Investissement dans le projet',
                    ],
                    'unit_amount' => (int) ($request->amount * 100),
                ],
                'quantity' => 1,
            ]],
            'success_url' => route('stripe.success', $project),
            'cancel_url'  => route('stripe.cancel', $project),
            'metadata' => [
                'project_id' => $project->id,
                'user_id' => auth()->id(),
                'amount' => $request->amount,
            ],
        ]);

        return redirect($session->url);
    }

    public function success(Project $project)
    {
        return view('payments.success', compact('project'));
    }

    public function cancel(Project $project)
    {
        return view('payments.cancel', compact('project'));
    }
}
