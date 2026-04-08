<x-app-layout>
    <h1>Lista de Roles</h1>

    <a href="{{ route('roles.create') }}">Crear Rol</a>

    <form method="GET" action="{{ route('roles.index') }}">
        <input type="text" name="buscar" placeholder="Buscar rol">
        <button type="submit">Buscar</button>
    </form>

    <ul>
        @foreach ($roles as $role)
            <li>
                {{ $role->name }}

                <a href="{{ route('roles.edit', $role->id) }}">Editar</a>

                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>