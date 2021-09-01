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

    <form action="{{route('updateContact',$personne->id)}}" method="post">
    @csrf
    @method('PUT')
    
    ImgLink: <input type="text" value="{{$personne->img}}" name="img">
    Birthday: <input type="text" value="{{$personne->birthday}}" name="birthday">
    Website: <input type="text" value="{{$personne->website}}" name="website">
    Phone: <input type="text" value="{{$personne->phone}}" name="phone">
    
    City: <input type="text" value="{{$personne->city}}" name="city">
    Age: <input type="text" value="{{$personne->age}}" name="age">
    Degree: <input type="text" value="{{$personne->degree}}" name="degree">
    
    Email: <input type="text" value="{{$personne->email}}" name="email">
    Freelance: <input type="text" value="{{$personne->freelance}}" name="freelance">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div> 
@endsection