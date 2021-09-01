@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$personne->id}}</h5>
        <h5 class="card-title">Métier: {{$personne->h3}}</h5>
        <p class="card-text">img: {{$personne->img}}</p>
        <h6 class="card-subtitle mb-2 text-muted">Titre: {{$personne->birthday}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">websie: {{$personne->website}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">phone: {{$personne->phone}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">city: {{$personne->city}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">age: {{$personne->age}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">degree: {{$personne->degree}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">email: {{$personne->email}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">freelance: {{$personne->freelance}}</h6>
    
        <form action="{{route('deleteAbout', $personne->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editAbout', $personne->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection