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
<h1 class="text-center">Page Portfolio</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updatePortfolio',$project->id)}}" method="post">
    @csrf
    @method('PUT')
    
    linkImg: <input type="text" value="{{$project->img}}" name="img">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div>
  
@endsection