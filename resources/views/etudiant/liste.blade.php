<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">
  <div class="row">
    <div class="col s12">
      <h1>PROJET 9 LARAVEL</h1>
      <hr>
      <a href="/tuteur" class="btn btn-primary">Liste des Tuteurs</a>
      <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
      
    <hr>
    
    
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    <table class="table">
    <thead>
    <tr>
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Classe</th>
    <th>Tuteur</th>
    <th>image</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    @php
      $ide = 1;
    @endphp
    @foreach ($etudiants as $etudiant)

    <tr>
    <td>{{ $ide }}</td>
    <td>{{ $etudiant->nom }}</td>
    <td>{{ $etudiant->prenom }}</td>
    <td>{{ $etudiant->classe }}</td>
    <td>{{ $etudiant->tuteur->nom }}</td>
    {{-- <td>{{ $etudiant->tuteur ? $etudiant->tuteur->etudiant: "" }}</td>  --}}
    <td> <img src="/images/{{ $etudiant->photo}}" alt="" style="width: 60px; height:60px; border-radius: 50px"> </td> 
    <td>
    <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
    <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delate</a>
    </td>
    </tr>
     
    @php
      $ide += 1;
    @endphp
    
    @endforeach
    </tbody>
    </table>
   
    
    </div>
   
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
