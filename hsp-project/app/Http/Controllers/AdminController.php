<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use App\Models\Salle;
use App\Models\TypeOffre;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ajoutOffreEmploi(Request $request) {
        $offreEmploi = OffreEmploi::create([
            'titre' => $request->input('titre'),
            'descriprion' => $request->input('description'),
            'type_offre' => $request->input('type_offre')
        ]);

        return response()->json($offreEmploi, 201);
    }

    public function supOffreEmploi($id) {
        OffreEmploi::findOrFail($id)->delete();
        return response()->json(['message' => 'Offre d\'Emploi supprimé avec succes'], 200);
    }

    public function ajoutSalle(Request $request){
        $salle = Salle::create([
            'nom' => $request->input('nom'),
            'description' => $request ->input('description')
        ]);

        return response()->json($salle, 201);
    }

    public function supSalle($id){
        Salle::findOrFail($id)->delete();
        return response()->json(['message' => 'Salle suppromé avec succes'], 200);
    }

    public function ajoutTypeOffre(Request $request){
        $type_offre = TypeOffre::create([
            'libelle' => $request->input('libelle')
        ]);

        return response()->json($type_offre, 201);
    }

    public function supTypeOffre($id){
        TypeOffre::findOrFail($id)->delete();
        return response()->json(['message' => 'TypeOffre supprimé avec succes'], 200);
    }
}
