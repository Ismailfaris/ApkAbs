@extends('layouts/layout')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Références</h2>
            <ol>
                <li><a href="/index">Accueil</a></li>
                <li>Références</li>
            </ol>
        </div>
    </div>

</section><!-- End Breadcrumbs -->
<div class="container">
    <div class="pass">
        @foreach($logos as $logo)
        <img width="150" height="120" src="{{ asset('storage/'.$logo->logo) }}" />
        @endforeach
    </div>
</div>
</div>

@endsection