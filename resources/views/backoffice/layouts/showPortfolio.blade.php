@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$project->id}}</h5>
        <h5 class="card-title">LinkImg: {{$project->img}}</h5>

    
        <form action="{{route('deletePortfolio', $project->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editPortfolio', $project->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection