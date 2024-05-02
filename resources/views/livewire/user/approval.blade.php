<div>
    <table>
        <thead>
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> No Handphone </th>
                <th> Alamat </th>
                <th>
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->no_hp}}</td>
                <td>{{$user->alamat}}</td>
                <td>
                    <button wire:click.prevent="Approve({{$user->id}})">
                        Approve
                    </button>
                    <button wire:click.prevent="Reject({{$user->id}})">
                        Reject
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>