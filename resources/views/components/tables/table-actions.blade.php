<a href="{{ route('student.view', $item->id) }}" class="btn btn-sm btn-primary">View</a>
<a href="{{ route('student.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

<form action="{{ route('student.destroy', $item->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
</form>
