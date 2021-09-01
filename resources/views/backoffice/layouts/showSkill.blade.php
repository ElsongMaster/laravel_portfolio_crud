@extends('backoffice.backTemplate.main')



@section('backContent')
<div class="container-fluid mt-5 d-flex justify-content-center align-items-center ">

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">ID: {{$skill->id}}</h5>
        <h5 class="card-title">Domaine: {{$skill->tech}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Valeur: {{$skill->val}}%</h6>

    
        <form action="{{route('deleteSkill', $skill->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('editSkill', $skill->id)}}" class="btn btn-warning">EDIT</a>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </div>
    </div>  
</div>
@endsection