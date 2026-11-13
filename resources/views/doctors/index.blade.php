<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <h1 class="mb-4">Doctors</h1>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->Id }}</td>
                    <td>{{ $doctor->Name }}</td>
                    <td>{{ $doctor->Degree }}</td>
                    <td>{{ $doctor->{'BMDC number'} }}</td>
                    <td>{{ $doctor->Chamber }}</td>
                    <td>{{ $doctor->Signature }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No patients found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $doctors->links() }}
</div>
</body>
</html>