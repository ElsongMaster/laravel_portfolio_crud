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
<h1 class="text-center">Page Contact</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updateContact',$contact->id)}}" method="post">
    @csrf
    @method('PUT')
    
    Adresse: <input type="text" value="{{old('adresse')}}" name="adresse">
    email: <input type="text" value="{{old('email')}}" name="email">
    Numéro de téléphone: <input type="text" value="{{old('phone')}}" name="phone">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div> 
@endsection