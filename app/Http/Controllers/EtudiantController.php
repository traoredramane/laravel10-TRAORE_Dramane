<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\Groupe;
class EtudiantController extends Controller
{
  
  public function liste_etudiant() 
  {
    $etudiants = Etudiant::all();
     return view('etudiant.liste', compact('etudiants'));
  } 
  
  public function ajouter_etudiant()
  
  {
    $nationalites = Nationalite::all();
    $groupes = Groupe::all();
    $villes = Ville::all();
    $tuteurs = Tuteur::all();
    return view('etudiant.ajouter', compact('tuteurs','villes','nationalites','groupes'));
    
  }
  
 public function ajouter_etudiant_traitement(Request $request)
 {
   
  $request->validate([
    'nom' => 'required',
    'prenom' => 'required',
    'classe' => 'required',
    'image' => 'required',
    'tuteur' => 'required',
    'ville' => 'required',
    'nationalite' => 'required',
    'groupe' => 'required',
  ]);
  
  $etudiant = new Etudiant();
  $etudiant->nom = $request->nom;
  $etudiant->prenom = $request->prenom;
  $etudiant->classe = $request->classe;
  $etudiant->photo = $request->image;
  $etudiant->tuteur_id = $request->tuteur;
  $etudiant->ville_id = $request->ville;
  $etudiant->nationalite_id = $request->nationalite;
  $etudiant->groupe_id = $request->groupe;
  $etudiant->save();
  
  return redirect('/ajouter')->with('status', 'L\'étudiant a bien eté ajouter avec succés.');
 }
 
 public function update_etudiant($id){
   
   $etudiants = Etudiant::find($id);
   $tuteurs = Tuteur::all();
   $villes = Ville::all();
   $nationalites = Nationalite::all();
   $groupes = Groupe::all();
   
   return view('etudiant.update', compact('etudiants', 'tuteurs', 'villes','nationalites','groupes'));
 }
  
  
 public function update_etudiant_traitement(Request $request){
  $request->validate([
    'nom' => 'required',
    'prenom' => 'required',
    'classe' => 'required',
    'image' => 'required',
    'ville' => 'required',
    'nationalite' => 'required',
    'groupe' => 'required',
    
  ]);
  
  $etudiant = Etudiant::find($request->id);
  $etudiant->nom = $request->nom;
  $etudiant->prenom = $request->prenom;
  $etudiant->classe = $request->classe;
  $etudiant->photo = $request->image;
  $etudiant->ville_id = $request->ville;
  $etudiant->nationalite_id = $request->nationalite;
  $etudiant->groupe_id = $request->groupe;
  $etudiant->update();
  
  return redirect('/etudiant')->with('status', 'L\'étudiant a bien eté modifié avec succés.');
 }
  
  
  public function delete_etudiant($id){
    $etudiant = Etudiant::find($id);
    $etudiant->delete();
    return redirect('/etudiant')->with('status', 'L\'étudiant a bien eté supprimé avec succés.');
  }
  
}
