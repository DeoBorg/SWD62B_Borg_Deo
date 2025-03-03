<div class="modal fade" id="editStudentModal{{ $student->id }}" tabindex="-1" aria-labelledby="editStudentModalLabel{{ $student->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStudentModalLabel{{ $student->id }}">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Old Student Name:</label>
                        <input type="text" class="form-control" value="{{ $student->name }}" readonly>
                    </div>

                    <div class="form-group mt-2">
                        <label for="name">New Student Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group mt-2">
                        <label>Old Email:</label>
                        <input type="email" class="form-control" value="{{ $student->email }}" readonly>
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">New Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group mt-2">
                        <label>Old Phone:</label>
                        <input type="text" class="form-control" value="{{ $student->phone }}" readonly>
                    </div>

                    <div class="form-group mt-2">
                        <label for="phone">New Phone:</label>
                        <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" required>
                    </div>

                    <div class="form-group mt-2">
                        <label>Old Date of Birth:</label>
                        <input type="date" class="form-control" value="{{ $student->dob }}" readonly>
                    </div>

                    <div class="form-group mt-2">
                        <label for="dob">New Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" value="{{ $student->dob }}" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="college_id">College:</label>
                        <select name="college_id" class="form-control" required>
                            <option value="" selected>Select College</option>
                            @foreach ($colleges as $college)
                            <option value="{{ $college->id }}" {{ $student->college_id == $college->id ? 'selected' : '' }}>
                                {{ $college->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
