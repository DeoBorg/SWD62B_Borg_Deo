<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#studentFormModal">
    Add New Student
</button>

<div class="modal fade" id="studentFormModal" tabindex="-1" aria-labelledby="studentFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentFormModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                            <option value="{{ $college->id }}" {{ old('college_id') == $college->id ? 'selected' : '' }}>
                                {{ $college->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Add Student</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
