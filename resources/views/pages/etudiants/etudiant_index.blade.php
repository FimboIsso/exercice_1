@extends('layouts.apphome')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Etudiant</h1>
        <a href="{{route('createEtudiant')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Nouveau  etudiant</a>
    </div>

    <div class="table-responsive">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>MATICULE</th>
                    <th>NOMS</th>
                    <th>AGES</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>

                @if(sizeof($etudiants)== 0)
                    <tr>
                        <td colspan="5" class="text-center"> Aucune donnee trouver</td>
                    </tr>
                @else
                    @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{$etudiant->id}}</td>
                            <td>{{$etudiant->matricule}}</td>
                            <td>{{$etudiant->noms}}</td>
                            <td>{{$etudiant->age}}</td>
                            <td><a  href="{{route('etudiantDetails',$etudiant->id)}}" class="btn btn-primary btn-sm">Voir detail</a>
                                <a href="{{route('modifierForm',$etudiant->id)}}" class="btn btn-secondary btn-sm">Modifier</a>
                                <a href="{{route('deleteEtudiant',$etudiant->id)}}" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>



@endsection


