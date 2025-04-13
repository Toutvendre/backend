<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Valider les données
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            // Préparer les données
            $formData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ];

            // Stocker dans la base de données (optionnel)
            Contact::create($formData);

            // Envoyer l'e-mail
            Mail::to('alexis07ki@gmail.com')->send(new ContactForm($formData));

            return response()->json([
                'type' => 'success',
                'message' => 'Message envoyé avec succès !'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());

            return response()->json([
                'type' => 'error',
                'message' => 'Erreur lors de l’envoi. Veuillez réessayer.'
            ], 500);
        }
    }
}
