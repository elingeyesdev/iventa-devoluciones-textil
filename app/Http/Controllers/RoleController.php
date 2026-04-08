<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    // 🔍 LISTAR + BUSCAR
    public function index(Request $request)
    {
        $buscar = $request->buscar;

        $roles = Role::where('name', 'like', '%' . $buscar . '%')->get();

        return view('roles.index', compact('roles'));
    }


    

    // 📄 FORM CREAR
    public function create()
    {
        return view('roles.create');
    }

    // 💾 GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Rol creado correctamente');
    }

    // 👁️ (opcional)
    public function show(string $id)
    {
        //
    }

    // ✏️ FORM EDITAR
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    // 🔄 ACTUALIZAR
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $id
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Rol actualizado');
    }

    // 🗑️ ELIMINAR
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Rol eliminado');
    }
}