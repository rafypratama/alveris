<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class BespokeInquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'vision' => 'nullable|string|max:2000',
        ]);

        $destinationEmail = 'alveris.official@gmail.com';

        try {
            $content = "New Bespoke Olfactory Consultation Inquiry:\n\n";
            $content .= "Full Name: " . $validated['name'] . "\n";
            $content .= "Email Address: " . $validated['email'] . "\n";
            $content .= "Preferred Consult Location: " . $validated['location'] . "\n";
            $content .= "Olfactory Vision / Notes: " . ($validated['vision'] ?? 'None provided') . "\n";
            $content .= "\nSubmitted on: " . now()->format('Y-m-d H:i:s');

            Mail::raw($content, function ($message) use ($validated, $destinationEmail) {
                $message->to($destinationEmail)
                        ->replyTo($validated['email'], $validated['name'])
                        ->subject('New Bespoke Consultation Request - ' . $validated['name']);
            });
        } catch (\Exception $e) {
            // Log error if mail server is not configured yet in .env, but allow form to succeed gracefully
            Log::error("Failed to send bespoke email: " . $e->getMessage());
        }

        return redirect()->to(url('/#bespoke'))->with('success', 'Votre pemintaan konsultasi telah terkirim ke Alveris Private Atelier (alveris.official@gmail.com). Tim Private Client Manager kami akan segera menghubungi Anda.');
    }
}
