@extends('layouts.app')

@section('head')

@endsection


@section('pagetitle','Create Task')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="javascript: void(0);">Todolist</a></li>
    <li class="breadcrumb-item active">Create Task</li>

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">New Task Form</div>
                    <div class="card-body">
                        <form method="POST" name="createForm" id="createForm" action="{{route('tasks.store')}}">
                            @csrf
                            @include('tasks._form')

                            <div class="btn-group float-right">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>

                        </form>
                        Content

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src:
<script>
    $('#user_id').select2({
        placeholder:"Sila pilih pengguna",
        allowClear: true
    });
    </script>

@endsection

