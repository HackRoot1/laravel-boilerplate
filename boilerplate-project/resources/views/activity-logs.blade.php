<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Event</th>
                <th>Model</th>
                <th>ID</th>
                <th>Description</th>
                <th>Data</th>
                <th>IP</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->user->name ?? 'System' }}</td>
                    <td>{{ $log->event }}</td>
                    <td>{{ class_basename($log->model_type) }}</td>
                    <td>{{ $log->model_id }}</td>
                    <td>{{ $log->description }}</td>
                    <td>
                        <pre>{{ json_encode($log->data, JSON_PRETTY_PRINT) }}</pre>
                    </td>
                    <td>{{ $log->ip }}</td>
                    <td>{{ $log->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
