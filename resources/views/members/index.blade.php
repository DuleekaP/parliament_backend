<!DOCTYPE html>
<html>
<head>
    <title>Members of Parliament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Members of Parliament</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('members.index') }}" method="GET" class="mb-4">
            <div class="row">
                <!-- Search Input -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name, party, or constituency" value="{{ request('search') }}">
                    </div>
                </div>

                <!-- Party Filter -->
                <div class="col-md-3">
                    <select name="party" class="form-select">
                        <option value="">Filter by Party</option>
                        @foreach ($parties as $party)
                            <option value="{{ $party }}" {{ request('party') == $party ? 'selected' : '' }}>{{ $party }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Constituency Filter -->
                <div class="col-md-3">
                    <select name="constituency" class="form-select">
                        <option value="">Filter by Constituency</option>
                        @foreach ($constituencies as $constituency)
                            <option value="{{ $constituency }}" {{ request('constituency') == $constituency ? 'selected' : '' }}>{{ $constituency }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary w-100">Apply</button>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('members.index') }}" class="btn btn-secondary w-100">Clear</a>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Party</th>
                    <th>civil_status</th>
                    <th>Birth Day</th>
                    <th>Constituency</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td><a href="{{route('members.show', $member->id) }}">{{ $member->name }}</td>
                        <td>{{ $member->party }}</td>
                        <td>{{ $member->civil_status }}</td>
                        <td>{{ $member->dob}}</td>
                        <td>{{ $member->constituency }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
        <ul class="pagination">
            @if ($members->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"><i class="fas fa-chevron-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $members->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
                </li>
            @endif

            @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                <li class="page-item {{ $members->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            @if ($members->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $members->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>