<x-app-layout>
    <h1>Crear Rol</h1>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre del rol">
        <button type="submit">Guardar</button>
    </form>
</x-app-layout>