@extends("layouts.apphome")

@section("content")


    <div class="row">
        <form method="POST" action="{{route('etudiants')}}">
            @csrf
            <div class="input-group mb-3">
                <label>MATRICULE</label>
                <input name="matricule" type="text" class="form-control " placeholder="Matricule" required/>
            </div>

            <div class="input-group mb-3">
                <label>NOMS</label>
                <input name="noms" type="text" class="form-control " placeholder="Noms complet" required/>
            </div>

            <div class="input-group mb-3">
                <label>AGES</label>
                <input name="age" type="number" class="form-control " placeholder="ages" required/>
            </div>

            <input type="submit" value="Enregistrer" class="form-control btn-primary"/>
        </form>
    </div>

@endsection
