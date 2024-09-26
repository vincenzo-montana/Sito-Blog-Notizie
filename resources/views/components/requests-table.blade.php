<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-secondary">attiva {{ $role }}</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
