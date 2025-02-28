<div class="btn-group mb-3" role="group" aria-label="Sort by Name">
    <a href="{{ route('students.index', array_merge(request()->query(), ['sort' => 'asc'])) }}" class="btn btn-primary {{ request('sort') == 'asc' ? 'active' : '' }} mr-2">
        Sort Name by Ascending
    </a>
    <a href="{{ route('students.index', array_merge(request()->query(), ['sort' => 'desc'])) }}" class="btn btn-primary {{ request('sort') == 'desc' ? 'active' : '' }}">
        Sort Name by Descending
    </a>
</div>