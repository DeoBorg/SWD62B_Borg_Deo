@extends('layouts.main')

@section('title', 'Colleges')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New College</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('colleges.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">College Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Add College</button>
                            <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection