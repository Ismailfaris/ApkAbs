@extends('layouts/dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center"> 
    <h2 style="width: 100%;height:10%;text-align:center;">Modifier a l'accueil</h2>

</div>
<div class="contentp">
    <form action="{{url('dashboard/dashmodifybyid/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $actualite['id'] }}">

            <label for="exampleFormControlInput1">Titre</label>
            <input type="text" class="form-control" value="{{ $actualite['titre'] }}" name="titre" id="exampleFormControlInput1" placeholder="Entre votre texte ici...">
            <br>
            <label for="exampleFormControlFile1">Sélectionnez une image</label><br>
            <input type="hidden" name="oldimage" value="{{ $actualite['image'] }}">
            
            <input name="image" class="form-control-file" id="exampleFormControlFile1" type="file" accept="image/png, image/jpeg" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            <br>
            <img id="output" src="{{ asset('storage/'.$actualite->image) }}"style="height: 20%;width:20%">
            <br><br>
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$actualite['description']}}</textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-outline-danger" style="margin-right: 5%;">Mettre à jour</button>
           <a href="{{url('dashboard/dashnewsmodify')}}"><button type="submit" class="btn btn-danger">Annuler</button></a> 

        </div>
    </form>
</div>
@endsection