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
      <h1>MODIFIER UN ETUDIANT - LARAVEL10</h1>
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
   
    
      <form action="/update/traitement" method="POST">
      @csrf
      
      <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">
      
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="texte" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
  </div>
  
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="texte" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
  </div>
  
  <div class="mb-3">
    <label for="Classe" class="form-label">Classe</label>
    <input type="texte" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
  </div>
 
{{--  
  <div class="mb-3">
    <label for="Image" class="form-label">Image</label>
    <input type="file" class="form-control" id="Classe" name="image"  value="{{ $etudiants->photo }}">
  </div>
 
 
  <div class="form-floating">
    <div> <label for="tuteur" class="form-label">Tuteur</label></div>
     <select class="form-select" id="tuteur" aria-label="Floating label select example" name="tuteur" value="{{ $etudiants->tuteur->nom }}">
      @foreach($tuteurs as $tuteur)
       <option value="{{$tuteur->id}}">{{$tuteur->nom}} {{$tuteur->prenom}}</option>
       @endforeach
     </select>
    
   </div>
   --}}
  
 
 <br>
  <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>
  
  <br> <br>
  
  <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
  
</form>
    
    </div>
   
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
