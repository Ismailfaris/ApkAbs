@extends('layouts/dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="width: 100%;height:10%;text-align:center;">Modifier a l'accueil</h2>

</div>
<div class="contentp">
    <form action="{{ url('dashboard/dashlogos-modifybyid/edit/'.$logo['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            
            <label for="exampleFormControlFile1">Sélectionner une image</label>
            <input type="hidden" name="oldlogo" value="{{ $logo['logo'] }}">

            <input name="logo" class="form-control-file" id="exampleFormControlFile1" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            <br>
            <img id="output" src="{{ asset('storage/'.$logo->logo) }}" style="height: 20%;width:20%">
            <br>
            <br>

            <div class="dropdown show">
                <p> Sélectionnez l'ordre de l'image</p>
                <select class="btn btn-secondary dropdown-toggle" name="order">
                    @for($i=1;$i<=$count;$i++) <option {{ ($logo->order == $i)?"selected":"" }} value="{{$i}}"><a class="dropdown-item">{{$i}}</a></option>
                        @endfor
                </select>
            </div>


            <br>
            <br>
            <button type="submit" class="btn btn-outline-danger">Modifier</button>

        </div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </form>
</div>
@endsection