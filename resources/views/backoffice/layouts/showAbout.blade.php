@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$fact->id}}</h5>
        <h5 class="card-title">Valeurs: {{$fact->span}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Titre: {{$fact->p_strong}}</h6>
        <p class="card-text">description: {{$fact->p}}</p>
    
        <form action="{{route('deleteFact', $fact->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editFact', $fact->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection