<div class="btn-group mb-3" role="group" aria-label="Sort by Name">
    @php
        $currentSort = request('sort');
    @endphp

    <a href="{{ route('students.index', array_merge(request()->query(), ['sort' => 'asc'])) }}" 
       class="btn btn-primary 
       @if($currentSort == 'asc') active @endif mr-2">
        Sort Name by Ascending
    </a>

    <a href="{{ route('students.index', array_merge(request()->query(), ['sort' => 'desc'])) }}" 
       class="btn btn-primary 
       @if($currentSort == 'desc') active @endif">
        Sort Name by Descending
    </a>
</div>
