<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
  <div class="row">
    <div class="col s12">
      <h1>AJOUTER UN ETUDIANT - LARAVEL10</h1>
      <hr>
    
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    
    <ul>
    
      @foreach ($errors->all() as $error)
      <li class="alert alert-danger">{{ $error }} </li>
      @endforeach
    </ul>
   
    
      <form action="/ajouter/traitement" method="POST">
      @csrf
      
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="texte" class="form-control" id="Nom" name="nom">
  </div>
  
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="texte" class="form-control" id="Prenom" name="prenom">
  </div>
  
  <div class="mb-3">
    <label for="Classe" class="form-label">Classe</label>
    <input type="texte" class="form-control" id="Classe" name="classe">
  </div>
 
 
 
  <div class="mb-3">
    <label for="Image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
 
 
  <div class="form-floating">
   <div> <label for="tuteur" class="form-label">Tuteur</label></div>
    <select class="form-select" id="tuteur" aria-label="Floating label select example" name="tuteur">
      <option value="selected">selectionné un tuteur</option>                                                                                                                                                                                                                                     as $ville)
      @foreach($tuteurs as $tuteur)
     <option value="{{$tuteur->id}}">{{$tuteur->nom}} {{$tuteur->prenom}}</option>
      @endforeach
    </select>
   
  </div>
  
  
  
  <div class="form-floating">
    <div> <label for="ville" class="form-label">Ville</label></div>
     <select class="form-select" id="ville" aria-label="Floating label select example" name="ville">
      <option value="selected">selectionné une ville</option>                                                                                                                                                                                                                                     as $ville)
      @foreach($villes as $ville)
       <option value="{{$ville->id}}">{{$ville->nom}}</option>
       @endforeach
     </select>
    
   </div>
   
   
  
  <div class="form-floating">
    <div> <label for="nationalite" class="form-label">Nationalité</label></div>
     <select class="form-select" id="nationalite" aria-label="Floating label select example" name="nationalite">
      <option value="selected">selectionné une nationalitéé</option>                                                                                                                                                                                                                                 as $ville)
      @foreach($nationalites as $nationalite)  
       <option value="{{$nationalite->id}}">{{$nationalite->nom}}</option>
       @endforeach
     </select>
    
   </div>
 
 
   <div class="form-floating">
    <div> <label for="groupe" class="form-label">Groupe sanguin</label></div>
     <select class="form-select" id="groupe" aria-label="Floating label select example" name="groupe">
      <option value="selected">selectionné un groupe sanguin</option>                                                                                                                                                                                                                                     as $ville)
      @foreach($groupes as $groupe) 
       <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
       @endforeach
     </select>
    
   </div>
   
 
 <br>
  <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
  
  <br> <br>
  
  <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
  
</form>
    
    </div>
   
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
