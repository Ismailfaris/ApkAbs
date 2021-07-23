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
                            <th>plans</th>
                            <th>price</th>
                            <th>description</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->cost}}</td>
                            <td>{{$plan->description}}</td>
                            <td style="text-align:center">
                                <a
                                    style="color:red"
                                    onclick="event.preventDefault();var conf=confirm('êtes-vous sûr de cette action ?');if(conf)document.getElementById('{{$plan->token_id}}').submit();"
                                ><i class="fas fa-trash-alt"></i></a>
                                <form method="POST"  action="{{ url('/social-media/linkedin/plan/delete/'.$plan->token_id) }}" id="{{$plan->token_id}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        
                     @endforeach
                    </tbody>

                </table>
                <!--<button type="button" class="btn btn-danger">Save</button>-->
                <a class="btn btn-danger float-right mt-2 mr-1" href="{{url('dashboard/plans/create')}}">
                    Ajouter un plan
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection