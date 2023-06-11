@extends('layouts.main')

@section('container')
    <header class="d-flex justify-content-between align-items-center">
        <h2 class="my-4">Today</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add"><i class="bi bi-clipboard-plus"></i> Add
            Todolist</button>
    </header>

    <table class="table table-borderless rounded overflow-hidden shadow-sm">
        <tr class="table-dark">
            <th>#</th>
            <th>Todo</th>
            <th>Time</th>
            <th width="140px">Action</th>
        </tr>
        @foreach ($todos as $todo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td @class(['text-decoration-line-through' => $todo->checked])>{{ $todo->todo }}</td>
                <td @class(['text-decoration-line-through' => $todo->checked])>{{ $todo->time }}</td>
                <td>
                    <form action="/check/{{ $todo->id }}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary"><i @class([
                            'bi bi-check-circle' => !$todo->checked,
                            'bi bi-x-circle' => $todo->checked,
                        ])></i></button>
                    </form>
                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#update"><i
                            class="bi bi-pencil-square"></i></button>
                    <form action="/{{ $todo->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <button class="btn btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#add"><i
                        class="bi bi-clipboard-plus"></i> Add Todolist</button>
            </td>
        </tr>
    </table>

    @include('layouts.popups')
@endsection
