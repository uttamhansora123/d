<table class="table table-bordered">
    <thead>
        <tr>
            <th width="100px">Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $products->render() !!}