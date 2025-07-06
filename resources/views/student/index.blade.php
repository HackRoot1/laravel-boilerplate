@extends('layouts.master')
@section('main')
    <div class="container">

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Students List</div>
                        <div>
                            <a href="{{ route('student.create') }}" class="btn btn-sm btn-primary">Add Student</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.tables.table', [
            'headers' => ['First Name', 'Last Name', 'City'],
            'fields' => ['first_name', 'last_name', 'city'],
            'collection' => $students,
            'noRows' => 'No users available',
            'actions' => function ($item) {
                return view('components.tables.table-actions', compact('item'))->render();
            },
        ])

    </div>
@endsection
