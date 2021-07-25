@extends('layouts/dashboard')

@section('content')



<!-- Main Content -->
<div id="content">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Modifier ou Supprimer <b>l'actualite</b></h2>
                        </div>
                        
                    </div>
                </div>
                @if(count($actualites) != 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead> 

                    <tbody>
                        @foreach($actualites as $actualite)
                        <tr>
                            <td>{{ $actualite['titre'] }}</td>
                            <td><img src="{{ asset('storage/'.$actualite->image) }}" alt="" class="img-fluid"></td>
                            <td>{{ $actualite['description'] }}</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-plus-square"></i></a>
                                <a href="/dashboard/dashmodifybyid/edit/{{$actualite['id'] }}" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                <a href="dashnewsmodify/delete/{{$actualite['id'] }}" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                @else
                <div>
                    <p>Vous n'avez aucune nouvelle pour le moment, voulez vous <a href="{{ url('dashboard/dashnews') }}"><b>créer une ?</b></a></p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection