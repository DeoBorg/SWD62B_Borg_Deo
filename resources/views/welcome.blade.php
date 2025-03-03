@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4 fw-bold">College and Student Management System</h1>
    <p class="lead text-muted mt-3">
        A simple and easy-to-use system for managing students and colleges.
    </p>

    <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg mt-3">
        View Students
    </a>
    <a href="{{ route('colleges.index') }}" class="btn btn-secondary btn-lg mt-3">
        View Colleges
    </a>
</div>

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-4">
            <i class="bi bi-building fs-1 text-danger"></i>
            <h3 class="mt-3">College Management</h3>
            <p>Manage colleges, including adding, editing, and removing them.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-person-plus fs-1 text-primary"></i>
            <h3 class="mt-3">Student Management</h3>
            <p>Add, edit, and remove students from your database.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-funnel fs-1 text-success"></i>
            <h3 class="mt-3">Filtering & Sorting</h3>
            <p>Find students quickly with filtering and sorting options.</p>
        </div>
    </div>
</div>

@endsection
