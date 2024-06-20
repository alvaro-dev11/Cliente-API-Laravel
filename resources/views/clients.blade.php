<h1>CLIENTS</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $client)
            <tr>
                <td>{{ $client['name'] }}</td>
                <td>{{ $client['email'] }}</td>
                <td>{{ $client['phone'] }}</td>
                <td>{{ $client['address'] }}</td>
                <td>
                    <a href="{{route('client.show', $client['id'])}}">Edit</a>
                    <a href="{{route('client.delete', $client['id'])}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
