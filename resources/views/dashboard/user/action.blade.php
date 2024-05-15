<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Action
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/user/{{ $model->id }}/edit"><i class="fa-solid fa-pen"></i> Edit</a>
        </li>
        <li>
            <form action="/dashboard/user/{{ $model->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="dropdown-item" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can"></i> Delete</button>
            </form>
        </li>
    </ul>
</div>
