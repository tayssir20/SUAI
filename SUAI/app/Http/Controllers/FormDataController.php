<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\FormData;
use App\Mail\FormDataMail;

class FormDataController extends Controller
{
    public function store(Request $request)
    {

        $formData = new FormData;

        $formData->typeClient = $request->input('typeClient');
        $formData->email = $request->input('email');
        $formData->nom = $request->input('nom');
        $formData->prenom = $request->input('prenom');
        $formData->adresse = $request->input('adresse');

        $formData->services = json_encode($request->input('services'));

        $formData->save();


        Mail::to('mouhamedtayssir20@gmail.com')->send(new FormDataMail($formData));

       // Transmettre les données du formulaire à la vue
    return view('thankyou')->with('formData', $formData);
    }
}
