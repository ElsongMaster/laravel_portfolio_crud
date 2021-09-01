@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$contact->id}}</h5>
        <h5 class="card-title">Adresse: {{$contact->info}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">email: {{$contact->email}}</h6>
        <p class="card-text">Numéro de téléphone: {{$contact->phone_number}}</p>
    
        <form action="{{route('deleteContact', $contact->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editContact', $contact->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection