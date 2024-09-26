{{-- componente formato da tabella per gestire le richieste per far diventare l'utente amministratore, revisore o redattore  --}}
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
                    @switch($role)
                        @case('amministratore')
                            <form action="{{ route('admin.setadmin', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-secondary">attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('revisore')
                            <form action="{{ route('admin.setrevisor', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-secondary">attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('redattore')
                            <form action="{{ route('admin.setwriter', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-secondary">attiva {{ $role }}</button>

                            </form>
                        @break
                    @endswitch
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
