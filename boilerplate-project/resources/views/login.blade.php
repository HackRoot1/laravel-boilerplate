<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
