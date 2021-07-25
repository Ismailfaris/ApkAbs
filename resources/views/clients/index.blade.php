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
                                <h2><b>plans</b> <small></small> </h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Status Abonnement</th>
                                <th>Type d'abonnement</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->role == 'client')
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        {{-- <td>{{ $user->status }}</td> --}}
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->subscriptions()->count() > 0 ? 'active' : 'no active' }}</td>
                                        <td>{{ $user->subscriptions()->count() > 0 && $user->subscribed('default') == 1 ? 'Plan 1' : '---' }}</td>
                                        {{-- @php dd($user->subscriptions()->first()); @endphp --}}
                                        <td style="text-align:center">
                                            <a style="color:red"
                                                onclick="event.preventDefault();var conf=confirm('êtes-vous sûr de cette action ?');if(conf)document.getElementById('{{ $user->token_id }}').submit();"><i
                                                    class="fas fa-trash-alt"></i></a>
                                            <form method="POST"
                                                action="{{ url('/social-media/linkedin/user/delete/' . $user->token_id) }}"
                                                id="{{ $user->token_id }}">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>

                    </table>
                    <!--<button type="button" class="btn btn-danger">Save</button>-->
                    {{-- <a class="btn btn-danger float-right mt-2 mr-1" href="{{ url('dashboard/plans/create') }}">
                        Ajouter un plan
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

@endsection
