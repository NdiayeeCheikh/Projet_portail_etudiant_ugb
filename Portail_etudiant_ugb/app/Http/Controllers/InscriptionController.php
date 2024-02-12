<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InscriptionController extends Controller
{
    public function accueil()
    {
        $inscription = Information::all();
      // dd($inscription); // Ajoutez cette ligne pour déboguer
        if($inscription)
        return view('accueil', [
            'inscription' => $inscription
        ]);
    }

    public function inscrip(Post $post)
    {

        return view('inscrip_admin');
    }
    
}
