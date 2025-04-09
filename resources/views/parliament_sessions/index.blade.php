<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions of Parliament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Sessions of Parliament</h1>
        @if ($parliamentSessions->isEmpty())
            <div class="alert alert-warning">No sessions found.</div>
        @else
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Session Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($parliamentSessions as $session)
                    <tr>
                        <td>{{ $session->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($session->start_date)->format('Y-m-d') }}</td>
                        <td>
                            @if (empty($session->end_date))
                                Ongoing
                            @else
                                {{ \Carbon\Carbon::parse($session->end_date)->format('Y-m-d') }}
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body