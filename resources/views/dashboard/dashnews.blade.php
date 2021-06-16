@extends('layouts/dashboard')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2 style="width: 100%;height:10%;text-align:center;">Ajouter a l'actualite</h2>

</div>
<div class="contentp">
    <form action="{{ url('dashboard/dashnews') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="exampleFormControlInput1">Titre</label>
            <input type="text" class="form-control" name="titre" id="exampleFormControlInput1" placeholder="Entre votre texte ici..." required>
            <br>
            <label for="exampleFormControlFile1">
                Sélectionner une image</label>
            <input name="image" class="form-control-file" id="exampleFormControlFile1" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
            <br>
            <img id="output" src="" style="height: 20%;width:20%">
            <br>
            <br>
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-outline-danger">Ajouter</button>

        </div>


    </form>
</div>

@endsection