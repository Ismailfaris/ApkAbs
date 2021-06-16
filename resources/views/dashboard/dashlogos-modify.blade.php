@extends('layouts/dashboard')

@section('content')



<!-- Main Content -->
<div id="content">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Modifier ou Supprimer une <b>Références</b></h2>
                        </div>
                        <div class="col-sm-3">

                            <a class="btn btn-outline-danger" href="{{ url('dashboard/dashlogos-add') }}"> Ajouter une Références</a>
                        </div>
                        <div class="col-sm-4">
                            <form action="{{ url('/dashboard/dashlogos-modify') }}" method="GET" role="search" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Entre la réf / l'ordre..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Références</th>
                            <th>Order</th>
                            <th>Créé à</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($refs as $ref)
                        <tr>
                            <td>
                                <img class="logos" src="{{ asset('storage/'.$ref->logo) }}" alt="">
                            </td>
                            <td>
                                <p class="logos">{{ $ref['order'] }}</p>
                            </td>
                            <td>{{ $ref['created_at'] }}</td>
                            <td>
                            <p>wesh wesh</p>
                                <a href="/dashboard/dashlogos-modifybyid/edit/{{$ref['id'] }}" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                <a href="delete/{{$ref['id'] }}" onclick="return confirm('Voulez-vous supprimer cette références ?');" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection