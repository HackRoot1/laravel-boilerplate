@extends('layouts.master')

@section('main')
    <div class="card">
        <div class="card-body">
            <form class="row g-3" action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf 
                @method('PUT')
                @include('components.form.input', [
                    'label' => 'First Name',
                    'name' => 'first_name',
                    'type' => 'text',
                    'placeholder' => 'Enter your first name',
                    'colClass' => 'col-12',
                    'model' => $student,
                ])

                @include('components.form.input', [
                    'label' => 'Last Name',
                    'name' => 'last_name',
                    'type' => 'text',
                    'placeholder' => 'Enter your last name',
                    'colClass' => 'col-12',
                    'model' => $student,
                ])

                @include('components.form.input-optional', [
                    'label' => 'city',
                    'name' => 'city',
                    'type' => 'text',
                    'placeholder' => 'Enter your city',
                    'colClass' => 'col-12',
                    'model' => $student,
                ])


                @include('components.form.button', [
                    'type' => 'submit',
                    'value' => 'Update',
                    'class' => 'btn-secondary',
                    'colClass' => 'col-12',
                ])

            </form>
        </div>
    </div>
@endsection
