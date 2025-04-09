<!DOCTYPE html>
<html>
<head>
    <title>{{ $member->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>{{ $member->name }}</h1>
        <p><strong>Party:</strong> {{ $member->party }}</p>
        <p><strong>Constituency:</strong> {{ $member->constituency }}</p>
        <p><strong>Date of Birth:</strong> {{ $member->dob }}</p>
        <p><strong>Civil Status:</strong> {{ $member->civil_status }}</p>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Buttons in the same row -->
        <div class="d-flex gap-2">
            <a href="{{ route('members.index') }}" class="btn btn-primary">Back to Members</a>
            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edit Member Details</a>
            
            <!-- Delete Form (styled like a button) -->
            <form action="{{ route('members.destroy', $member->id) }}" method="POST" 
                  onsubmit="return confirm('Are you sure you want to delete this member?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Member</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>