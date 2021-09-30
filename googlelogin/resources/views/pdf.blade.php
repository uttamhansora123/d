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
                @foreach($pdf  as $v)
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
    
     