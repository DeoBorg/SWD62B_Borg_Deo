@extends('layouts.main')

@section('title', 'Colleges')

@section('content')
<div class="container mt-5 mb-5">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h2 class="mt-4">List of Colleges</h2>
    
    @if($colleges->isEmpty())
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="alert alert-danger text-center fw-bold fs-3 p-4" style="max-width: 500px;">
            No colleges found.
        </div>
    </div>
    @else
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
            <tr>
                <td>{{ $college->name }}</td>
                <td>{{ $college->address }}</td>
                <td>
                    <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning">Edit</a>

                    <!-- Button to Trigger Delete Modal -->
                    <button class="btn btn-danger delete-college-btn" 
                            data-toggle="modal" 
                            data-target="#confirmDeleteModal" 
                            data-url="{{ route('colleges.destroy', $college->id) }}">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

<!-- Include the Delete Confirmation Modal -->
@include('colleges.partials._confirm_delete_college')

@endsection
