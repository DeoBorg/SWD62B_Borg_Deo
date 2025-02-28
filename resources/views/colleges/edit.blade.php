@extends('layouts.main')

@section('title', 'Edit College')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit College</div>
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
                    <form action="{{ route('colleges.update', $college->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="old_name" class="col-md-4 col-form-label">Old College Name:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $college->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="name" class="col-md-4 col-form-label">New College Name:</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="old_address" class="col-md-4 col-form-label">Old Address:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $college->address }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="address" class="col-md-4 col-form-label">New Address:</label>
                            <div class="col-md-6">
                                <input type="text" name="address" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
