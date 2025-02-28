@extends('layouts.main')

@section('title', 'Edit Student')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Student</div>
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
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="old_name" class="col-md-4 col-form-label">Old Student Name:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $student->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="name" class="col-md-4 col-form-label">New Student Name:</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="old_email" class="col-md-4 col-form-label">Old Email:</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" value="{{ $student->email }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label">New Email:</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="old_phone" class="col-md-4 col-form-label">Old Phone:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $student->phone }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="phone" class="col-md-4 col-form-label">New Phone:</label>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="old_dob" class="col-md-4 col-form-label">Old Date of Birth:</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" value="{{ $student->dob }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="dob" class="col-md-4 col-form-label">New Date of Birth:</label>
                            <div class="col-md-6">
                                <input type="date" name="dob" class="form-control" value="{{ old('dob', $student->dob) }}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="college_id" class="col-md-4 col-form-label">College:</label>
                            <div class="col-md-6">
                                <select name="college_id" class="form-control" required>
                                    <option value="" selected>Select College</option>
                                    @foreach ($colleges as $college)
                                    <option value="{{ $college->id }}">
                                        {{ $college->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection