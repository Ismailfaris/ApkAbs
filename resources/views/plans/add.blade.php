@extends('layouts.dashboard')
@section('content')
    <div class="mt-5">
        <div class="container mt-5">
            <h6>Ajouter un plan</h6>
            <div class="card" style="width:24rem;margin:auto;">
                <div class="card-body">
                    <form action="{{ route('store.plan') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="plan name">Plan :</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Plan Name">
                        </div>
                        <div class="form-group">
                            <label for="cost">Price:</label>
                            <input type="text" class="form-control" name="cost" placeholder="Enter Cost">
                        </div>
                        <div class="form-group">
                            <label for="cost"> Description:</label>
                            <textarea type="text" class="form-control" name="description" placeholder="Enter Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger float-right">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
