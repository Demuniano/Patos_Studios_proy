<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Direccion</th>
            <th>correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>