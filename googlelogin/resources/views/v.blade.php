<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PDF </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Expot Dta in PDf</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ route('dp')}}">Download PDF</a>
        </div>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($view ?? '' as $v)
                <tr>
                    <th scope="row">{{ $v->id }}</th>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->phone }}</td>
                    <td>{{ $v->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    
</body>

</html>