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
   
    
      <form action="/updat/traitement" method="POST">
      @csrf
      
      <input type="text" name="id" style="display: none;" value="{{ $tuteur->id }}">
      
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="texte" class="form-control" id="Nom" name="nom" value="{{ $tuteur->nom }}">
  </div>
  
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="texte" class="form-control" id="Prenom" name="prenom" value="{{ $tuteur->prenom }}">
  </div>
  
 
  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="number" class="form-control" id="contact" name="contact" value="{{ $tuteur->contact }}">
  </div>
  
  
  <div class="mb-3">
    <label for="profession" class="form-label">Profession</label>
    <input type="texte" class="form-control" id="profession" name="profession" value="{{ $tuteur->profession }}">
  </div>
 
 
 
 <br>
  <button type="submit" class="btn btn-primary">MODIFIER UN TUTEUR</button>
  
  <br> <br>
  
  <a href="/tuteur" class="btn btn-danger">Revenir à la liste des tuteurs</a>
  
</form>
    
    </div>
   
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
