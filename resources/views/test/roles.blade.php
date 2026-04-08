<x-app-layout>
<div class="container">
<h1>Prueba de Roles - Spatie</h1>
@role('admin')
<p style="color: green; font-weight: bold;">
Soy ADMIN
</p>
@endrole
@role('prestamista')
<p style="color: blue; font-weight: bold;">
Soy PRESTAMISTA
</p>
@endrole
@hasanyrole('admin|prestamista')
<p>Tengo al menos un rol</p>
@endhasanyrole
@unlessrole('admin')
<p>No soy administrador</p>
@endunlessrole
</div>
</x-app-layout>