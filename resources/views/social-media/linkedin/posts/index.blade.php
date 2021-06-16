@extends('layouts/dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<div id="content">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2><b>Posts</b> <small>Linkedin</small> </h2>
                        </div>
                    </div>
                </div>
                @if(count($posts) != 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Text</th>
                            <th>Date de l'ajout</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->share_text }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td style="text-align:center">
                                <a 
                                    style="color:red"
                                    onclick="event.preventDefault();var conf=confirm('êtes-vous sûr de cette action ?');if(conf)document.getElementById('{{$post->post_group}}').submit();"
                                >
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <form method="POST"  action="{{ url('dashboard/social-media/linkedin/posts/delete/'.$post->post_group) }}" id="{{$post->post_group}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        
                     @endforeach
                    </tbody>

                </table>
                
                <!--<button type="button" class="btn btn-danger">Save</button>-->
                <a class="btn btn-danger float-right mt-2 mr-1" href="{{ url('dashboard/social-media/linkedin/post/add') }}">
                    Ajouter un post
                </a>
                @else
                <div>
                    <p>Vous n'avez aucun post a çe moment, voulez vous <a href="{{ url('dashboard/social-media/linkedin/post/add') }}"><b>créer un ?</b></a></p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection