@extends('layouts.main')

@section('title', 'Students')

@section('content')
<div class="container mt-5 mb-5">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h2 class="mt-4">List of Students</h2>

    @include('students.partials._create_student_form')

    <div class="row mb-3">
        <div class="col-md-6">
            @include('students.partials._filter_college')
        </div>
        <div class="col-md-6">
            @include('students.partials._sort_name')
        </div>
    </div>

    @if($students->isEmpty())
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="alert alert-danger text-center fw-bold fs-3 p-4" style="max-width: 500px;">
            No students found.
        </div>
    </div>
    @else
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>College</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->college->name }}</td>
                <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#editStudentModal{{ $student->id }}">
                        Edit
                    </button>

                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @include('students.partials._edit_student_form', ['student' => $student])

            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
