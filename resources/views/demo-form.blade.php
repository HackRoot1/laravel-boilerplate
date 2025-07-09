<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="h-100 container d-flex justify-content-center align-items-center">
        <div class="card w-100">
            <div class="card-body">
                <form action="">
                    @include('components.form.button', [
                        'type' => 'submit',
                        'value' => 'Sign In',
                        'class' => 'btn btn-secondary',
                        'colClass' => 'col-12',
                    ])

                    @include('components.form.checkbox', [
                        'name' => 'terms',
                        'label' => 'I agree to the terms and conditions',
                        'model' => $user ?? null,
                        'required' => true,
                        'colClass' => 'col-md-6 pt-3',
                    ])

                    @include('components.form.date', [
                        'name' => 'dob',
                        'label' => 'Date of Birth',
                        'model' => $user ?? null,
                        'placeholder' => 'YYYY-MM-DD',
                        'colClass' => 'col-md-6',
                    ])

                    @include('components.form.input', [
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'colClass' => 'col-12',
                        'required' => true,
                        'placeholder' => 'Enter your email',
                        'model' => $user ?? null,
                    ])
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
