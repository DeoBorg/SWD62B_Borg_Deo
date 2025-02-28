@extends('layouts.main')

@section('title', 'Add New Student')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Student</div>
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
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="college_id">College:</label>
                            <select name="college_id" class="form-control" required>
                                <option value="" selected>Select College</option>
                                @foreach ($colleges as $college)
                                <option value="{{ $college->id }}">
                                    {{ $college->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection