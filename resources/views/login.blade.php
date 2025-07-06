@extends('layouts.master')
@section('main')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="{{ route('auth.check') }}" method="POST">

                    {{ csrf_field() }}
                    @include('components.form.input', [
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'placeholder' => 'Enter your email',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.input', [
                        'label' => 'Password',
                        'name' => 'password',
                        'type' => 'password',
                        'placeholder' => 'Enter your Password',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.button', [
                        'type' => 'submit',
                        'value' => 'Sign In',
                        'class' => 'btn-secondary',
                        'colClass' => 'col-12',
                    ])

                </form>
            </div>

        </div>

    </div>
@endsection
