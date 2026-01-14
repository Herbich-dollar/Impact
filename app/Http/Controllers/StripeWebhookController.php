<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;

class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                config('services.stripe.webhook')
            );
        } catch (SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $project = Project::find($session->metadata->project_id);

            if ($project) {
                Donation::create([
                    'project_id' => $project->id,
                    'name' => auth()->user()->name ?? 'Investisseur',
                    'email' => auth()->user()->email ?? 'noreply@site.com',
                    'amount' => $session->metadata->amount,
                ]);

                $project->increment('raised_amount', $session->metadata->amount);
            }
        }

        return response()->json(['status' => 'success']);
    }
}
