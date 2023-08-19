@extends('master')

@section('content')
    <section class="Todo" style="">
        <div class=" py-2">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-xl-10">
                    <div class="card">
                        <div class="card-header p-3">
                            <a class="mb-0" style="font-size: 20px"><i class="fas fa-tasks "></i> Task List</a>
                            <a href="{{ url('/login') }}" class="btn btn-primary float-right mt-0">Add Task</a>
                        </div>
                        <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: auto">

                            <table class="table mb-0">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">To Add Tasks Need to First <a href="{{ url('/login') }}">Login</a></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


@endsection
