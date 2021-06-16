@extends('layouts/dashboard')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2 style="width: 100%;height:10%;text-align:center;">Ajouter une Références</h2>

</div>
<div class="contentp">
    <form action="{{ url('dashboard/dashlogos-add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="exampleFormControlFile1">
                Sélectionner une image</label>
            <input name="logo" class="form-control-file" id="exampleFormControlFile1" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required>
            <br>
            <img id="output" src="" style="height: 20%;width:20%">
            <br>
            <br>

            

            <br>
            <br>
            <button type="submit" class="btn btn-outline-danger">Ajouter</button>

        </div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </form>
</div>

@endsection