@extends('layouts.apphome')

@section('content')


    <h1>{{$etudiant->noms}}</h1>
    <h2>{{$etudiant->matricule}}</h2>
    <h3>{{$etudiant->age }}</h3>
    <h4>{{$etudiant->created_at }}</h4>
    <h4>{{$etudiant->updated_at }}</h4>

@endsection
