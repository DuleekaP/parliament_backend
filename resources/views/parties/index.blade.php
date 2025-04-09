<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parties of Parliament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Parties of Parliament</h1>
        @if ($parties->isEmpty())
            <div class="alert alert-warning">No parties found.</div>
        @else
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Party</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parties as $party)
                        <tr>
                            <td>{{ $party->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($party->started_date)->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>