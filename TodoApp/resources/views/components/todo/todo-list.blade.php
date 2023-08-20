<section class="Todo" style="">
    <div class=" py-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12 col-xl-10">
                @if(session('message'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="bg-light-success text-capitalize">{{session('message')}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header p-3">
                        <a class="mb-0" style="font-size: 20px"><i class="fas fa-tasks "></i> Task List</a>
                        <a href="{{ url('/create-todo') }}" class="btn btn-primary float-right mt-0">Add Task</a>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: auto">

                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Tasks</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($todos as $todo)
                                <tr class="fw-normal">
                                    @if($todo->status == '1')
                                        <th>
                                            <span class="ms-2"><del> {{ $todo->title }} </del></span>
                                        </th>
                                        <td>
                                            <del>{{  $todo->description }}</del>
                                        </td>
                                    @else
                                        <th>
                                            <span class="ms-2">{{ $todo->title }}</span>
                                        </th>
                                        <td>
                                            {!! $todo->description !!}
                                        </td>
                                    @endif
                                    <td class="align-middle">
                                        @if($todo->status == '0')
                                            <h6 class="mb-0"><span class="badge bg-danger">Pending</span></h6>
                                        @else
                                            <h6 class="mb-0"><span class="badge bg-success">Completed</span></h6>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        @if($todo->status == '0')
                                            <a href="{{ url('/status-change', $todo->id) }}" data-mdb-toggle="tooltip"
                                               title="Done"><i
                                                    class="fas fa-check text-success me-3"></i></a>
                                        @else
                                            <a href="{{ url('/status-change', $todo->id) }}" data-mdb-toggle="tooltip"
                                               title="Undo"><i
                                                    class="fas fa-undo text-warning me-3"></i></a>
                                        @endif
                                        <form action="{{ url('/delete-todo') }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="todo_id" value="{{$todo->id}}">
                                            <button class="btn btn-sm"
                                                    onclick="return confirm('Are you Sure to delete this task?')"><i
                                                    class="fas fa-trash-alt text-danger"></i></i> </button>&nbsp;
                                        </form>
                                        <a href="{{ url('/edit-todo', $todo->id)  }}" data-mdb-toggle="tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

