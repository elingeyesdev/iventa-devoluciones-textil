<x-app-layout>
    <h1>Editar Rol</h1>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $role->name }}">
        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>