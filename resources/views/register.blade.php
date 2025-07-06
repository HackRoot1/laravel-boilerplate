@extends('layouts.master')
@section('main')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="{{ route('user.store') }}" method="POST">
                    {{ csrf_field() }}
                    @include('components.form.input', [
                        'label' => 'First Name',
                        'name' => 'first_name',
                        'type' => 'text',
                        'placeholder' => 'Enter your First Name',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.input', [
                        'label' => 'Last Name',
                        'name' => 'last_name',
                        'type' => 'text',
                        'placeholder' => 'Enter your Last Name',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.input', [
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'placeholder' => 'Enter your Email',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.input', [
                        'label' => 'Password',
                        'name' => 'password',
                        'type' => 'password',
                        'placeholder' => 'Enter your Password',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.input', [
                        'label' => 'Confirm Password',
                        'name' => 'password_confirmation',
                        'type' => 'password',
                        'placeholder' => 'Enter your Confirmed Password',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.button', [
                        'type' => 'submit',
                        'value' => 'Register',
                        'class' => 'btn-secondary',
                    ])
                </form>
            </div>
        </div>
    </div>
@endsection
