@extends('layouts/dashboard')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2 style="width: 100%;height:10%;text-align:center;">Add news</h2>

</div>
<div class="contentp">
    <form action="actualiteedashboard" method="POST">
        @csrf
        <div class="form-group">

            <label for="name">Titre</label>
            <input type="text" class="form-control" name="titre" id="name">
            <br>
            <button type="submit" class="btn btn-danger">Ajouter</button>

        </div>
    </form>
</div>

@endsection