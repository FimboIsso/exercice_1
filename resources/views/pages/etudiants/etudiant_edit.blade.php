@extends("layouts.apphome")

@section("content")


    <div class="row">
        <form method="post" action="{{route('etudiantUpdate',$etudiant->id)}}">
            @csrf
            {{method_field('PUT')}}
            <div class="input-group mb-3">
                <label>MATRICULE</label>
                <input name="matricule" value="{{$etudiant->matricule}}" type="text" class="form-control " placeholder="Matricule" required/>
            </div>

            <div class="input-group mb-3">
                <label>NOMS</label>
                <input name="noms" type="text" value="{{$etudiant->noms}}" class="form-control " placeholder="Noms complet" required/>
            </div>

            <div class="input-group mb-3">
                <label>AGES</label>
                <input name="age" type="number" value="{{$etudiant->age}}" class="form-control " placeholder="ages" required/>
            </div>

            <input type="submit" value="Modifier" class="form-control btn-primary"/>
        </form>
    </div>

@endsection
