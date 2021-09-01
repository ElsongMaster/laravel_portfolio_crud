@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID:{{$service->id}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Title:{{$service->title}}</h6>
        <p class="card-text">description: {{$service->description}}</p>
    
        <form action="{{route('deleteService', $service->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editService', $service->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection