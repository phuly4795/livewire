<div class="container-fluid">
    <input wire:model.live.debounce.500ms='search' type="text" placeholder="Search..."
    class="bg-gray-100 ml-2 rounded px-4 py-2 hover:bg-gray-100" />

    <table class="table">
        <thead>
            <th>#</th>
            <th>Email</th>
            <th>name</th>
            <th>Join at</th>
        </thead>
        <tbody wire:poll>
            @foreach ($listUser as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>        
            @endforeach
        </tbody>
    </table>
    {{$listUser->links()}}
</div>
