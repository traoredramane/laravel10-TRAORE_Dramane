<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\Etudiant;

class TuteurController extends Controller
{
  
  public function liste_tuteur() 
  {
    $tuteurs = Tuteur::all();
     return view('tuteur.liste', compact('tuteurs'));
  } 
  
  public function ajouter2_tuteur()
  
  {
    return view('tuteur.ajouter2');
  }
  
 public function ajouter2_tuteur_traitement(Request $request)
 {
   
  $request->validate([
    'nom' => 'required',
    'prenom' => 'required',
    'contact' => 'required',
    'profession' => 'required',
    
    
  ]);
  
  $tuteur = new Tuteur();
  $tuteur->nom = $request->nom;
  $tuteur->prenom = $request->prenom;
  $tuteur->contact = $request->contact;
  $tuteur->profession = $request->profession;
  $tuteur->save();
  
  return redirect('/ajouter2')->with('status', 'L\'étudiant a bien eté ajouter avec succés.');
 }
 
 public function updat_tuteur($id){
   
   $tuteur = Tuteur::find($id);
   $etudiant = Etudiant::all();
   
   return view('tuteur.updat', compact('tuteur','etudiant'));
 }
  
  
 public function updat_tuteur_traitement(Request $request){
  $request->validate([
    'nom' => 'required',
    'prenom' => 'required',
    'contact' => 'required',
    'profession' => 'required',
    
  ]);
  
  $tuteur = Tuteur::find($request->id);
  $tuteur->nom = $request->nom;
  $tuteur->prenom = $request->prenom;
  $tuteur->contact = $request->contact;
  $tuteur->profession = $request->profession;
  $tuteur->update();
  
  return redirect('/tuteur')->with('status', 'L\'étudiant a bien eté modifié avec succés.');
 }
  
  
  public function delete_tuteur($id){
    $tuteur = Tuteur::find($id);
    $tuteur->delete();
    return redirect('/tuteur')->with('status', 'L\'tuteur a bien eté supprimé avec succés.');
  }
  
}
