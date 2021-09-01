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
<h1 class="text-center">Page About</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updateAbout',$personne->id)}}" method="post" class="w-50">
    @csrf
    @method('PUT')
    <div class=" d-flex flex-column w-100">

        Métier: <input type="text" value="{{$personne->h3}}" name="metier" class="mt-1 mb-3">
    </div>
    <div class=" d-flex flex-column w-100">

        ImgLink: <input type="text" value="{{$personne->img}}" name="img" class="mt-1 mb-3">
    </div>
    <div class=" d-flex flex-column w-100">

        Birthday: <input type="text" value="{{$personne->birthday}}" class ="mt-1 mb-3"name="birthday">
    </div>
    <div class=" d-flex flex-column w-100">

        Website: <input type="text" value="{{$personne->website}}" class ="mt-1 mb-3"name="website">
    </div>
    <div class=" d-flex flex-column w-100">

        Phone: <input type="text" value="{{$personne->phone}}" class ="mt-1 mb-3"name="phone">
    </div>
    <div class=" d-flex flex-column w-100">

        City: <input type="text" value="{{$personne->city}}" class ="mt-1 mb-3"name="city">
    </div> 
    <div class=" d-flex flex-column w-100">

        Age: <input type="text" value="{{$personne->age}}" class ="mt-1 mb-3"name="age">
    </div> 
    <div class=" d-flex flex-column w-100">

        Degree: <input type="text" value="{{$personne->degree}}" class ="mt-1 mb-3"name="degree">
    </div>
    <div class=" d-flex flex-column w-100">

        Email: <input type="text" value="{{$personne->email}}" class ="mt-1 mb-3"name="email">
    </div>
    <div class=" d-flex flex-column w-100">

        Freelance: <input type="text" value="{{$personne->freelance}}" class ="mt-1 mb-3"name="freelance">
    </div>
    
    <div class=" d-flex flex-column w-100">

        Présentation: <input type="text" value="{{$personne->p3}}" class ="mt-1 mb-3"name="freelance">
    </div>
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div> 
@endsection