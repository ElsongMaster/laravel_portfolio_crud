@extends('backoffice.backTemplate.main')



@section('backContent')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif
<h1 class="text-center">Page Facts</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updateFact',$fact->id)}}" method="post">
    @csrf
    @method('PUT')
    
    Valeurs: <input type="text" value="{{old('valeur')}}" name="valeur">
    Titre: <input type="text" value="{{old('title')}}" name="title">
    description: <input type="text" value="{{old('description')}}" name="description">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div> 
@endsection