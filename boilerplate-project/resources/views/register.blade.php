<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
