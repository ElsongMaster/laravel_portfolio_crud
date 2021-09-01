@extends('backoffice.backTemplate.main')



@section('backContent')
<h1 class="text-center">Page Skills</h1>
<h2 class="text-center w-100 mb-5">Mise à jour des données</h2>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5">

    <form action="{{route('updateSkill',$skill->id)}}" method="post">
    @csrf
    @method('PUT')
    
    Domaines: <input type="text" value="{{$skill->tech}}" name="tech">
    Valeur: <input type="text" value="{{$skill->val}}" name="val">
    
    <button class="btn btn-warning text-light">Submit</button>
    </form>   
</div>

@endsection