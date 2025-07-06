@extends('layouts.master')
@section('main')
    <div class="container">

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Student Data</div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li>
                            First Name : {{ $student->first_name }}
                        </li>
                        <li>
                            Last Name : {{ $student->last_name }}
                        </li>
                        <li>
                            City : {{ $student->city }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
