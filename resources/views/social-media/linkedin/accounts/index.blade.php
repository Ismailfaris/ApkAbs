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
                            <h2><b>Comptes</b> <small>Linkedin</small> </h2>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de l'ajout</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->last_name}}</td>
                            <td>{{$account->first_name}}</td>
                            <td>{{$account->created_at}}</td>
                            <td style="text-align:center">
                                <a
                                    style="color:red"
                                    onclick="event.preventDefault();var conf=confirm('êtes-vous sûr de cette action ?');if(conf)document.getElementById('{{$account->token_id}}').submit();"
                                ><i class="fas fa-trash-alt"></i></a>
                                <form method="POST"  action="{{ url('/social-media/linkedin/account/delete/'.$account->token_id) }}" id="{{$account->token_id}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        
                     @endforeach
                    </tbody>

                </table>
                <!--<button type="button" class="btn btn-danger">Save</button>-->
                <a class="btn btn-danger float-right mt-2 mr-1" href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={{env('CLIENT_ID')}}&redirect_uri={{env('REDIRECT_LINKEDIN_URI')}}&state=foobar&scope=r_liteprofile%20r_emailaddress%20w_member_social">
                    Ajouter un compte
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection