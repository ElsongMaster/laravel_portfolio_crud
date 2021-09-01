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
<h1 class="text-center">Page Services</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updateService',$service->id)}}" method="post">
    @csrf
    @method('PUT')
    
    Titre: <input type="text" value="{{old('title')}}" name="title">
    Description: <input type="text" value="{{old('description')}}" name="description">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div>

@endsection