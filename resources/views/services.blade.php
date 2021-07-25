@extends('layouts/layout')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mb-3">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Nos sérvices</h1>
            <p class="lead">choisissez rapidement l'un de nos services et commencez tout de suite le travail avec notre
                équipe
            </p>
        </div>

        <div class="card-deck mb-3 text-center">
            @foreach ($plans as $plan)

                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{$plan->name}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{$plan->cost}} dh<small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>gestion de 3 modules de finance</li>
                            <li>2 GB de stockage </li>
                            <li>support par email</li>
                            <li>
                                Accès au centre d'aide</li>
                        </ul>
                        <a type="button" class="btn btn-lg btn-block btn-outline-primary"
                            href="{{ url('plans/show/1') }}">Acheter</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pack 2</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">3500 Dh <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>gestion de 7 modules de finance</li>
                        <li>10 GB de stockage </li>
                        <li>support par email/télephone</li>
                        <li>
                            Accès au centre d'aide</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Acheter</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pack 3 </h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">4200 Dh <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>gestion de tous les modules de finance</li>
                        <li>15 GB de stockage </li>
                        <li>support technique en direct</li>
                        <li>
                            Accès au centre d'aide</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Acheter</button>
                </div>
            </div> --}}
        </div>


    @endsection
