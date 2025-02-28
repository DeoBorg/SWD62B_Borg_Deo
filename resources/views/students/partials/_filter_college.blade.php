<form method="GET" action="{{ route('students.index') }}" class="form-inline mb-3 align-items-center">
    <div class="form-group mr-2">
        <label for="college_id" class="mr-2">Filter by College:</label>
        <select name="college_id" class="form-control">
            <option value="">All Colleges</option>
            @foreach($colleges as $college)
            <option value="{{ $college->id }}" @if(request('college_id') == $college->id) selected @endif>
            {{ $college->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>