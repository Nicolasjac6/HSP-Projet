<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create(){

        Etudiant::create([
            'nom' => 'Jaconelle',
            'prenom' => 'Nicolas',
            'email' => 'nicolas.jac6@gmail.com',
            'domaineEtude' => 'Informatique'
        ]);
    }
}
