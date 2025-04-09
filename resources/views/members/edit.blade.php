<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" required>
        </div>
        <div class="mb-3">
            <label for="party" class="form-label">Party</label>
            <input type="text" class="form-control" id="party" name="party" value="{{ $member->party }}" required>
        </div>
        <div class="mb-3">
            <label for="constituency" class="form-label">Constituency</label>
            <input type="text" class="form-control" id="constituency" name="constituency" value="{{ $member->constituency }}" required>
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $member->dob }}" required>
        </div>
        <div class="mb-3">
            <label for="civil_status" class="form-label">Civil Status</label>
            <input type="text" class="form-control" id="civil_status" name="civil_status" value="{{ $member->civil_status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
</div>
</body>
</html>