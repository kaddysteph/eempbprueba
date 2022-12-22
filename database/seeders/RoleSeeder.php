<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::updateOrCreate(['name' => 'Administrador']);
        $role2 = Role::updateOrCreate(['name' => 'Usuario']);
        $role3 = Role::updateOrCreate(['name' => 'Informatica']);

        Permission::updateOrCreate(['name' => 'users.index',
                                    'description' => 'Ver Usuarios'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'users.edit',
                                    'description' => 'Editar Usuarios'])->assignRole($role1);

        Permission::updateOrCreate(['name' => 'tarifaresolucion.index',
                                    'description' => 'Ver Listado de Resoluciones'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifaresolucion.create',
                                    'description' => 'Crear Resolucion'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifaresolucion.edit',
                                    'description' => 'Editar Resolucion'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifaresolucion.destroy',
                                    'description' => 'Eliminar Resolucion'])->assignRole($role1);

        Permission::updateOrCreate(['name' => 'tarifabloque.index',
                                    'description' => 'Ver listado de Bloques de Tarifa'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifabloque.create', 
                                    'description' => 'Crear Bloque de Tarifa'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifabloque.edit',
                                    'description' => 'Editar Bloque de Tarifa'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifabloque.destroy',
                                    'description' => 'Eliminar Bloque de Tarifa'])->assignRole($role1);

        Permission::updateOrCreate(['name' => 'tarifacargos.index',
                                    'description' => 'Ver listado de Cargos'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifacargos.create',
                                    'description' => 'Crear Cargo'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifacargos.edit',
                                    'description' => 'Editar Cargo'])->assignRole($role1);
        Permission::updateOrCreate(['name' => 'tarifacargos.destroy',
                                    'description' => 'Eliminar Cargo'])->assignRole($role1);

    }
    
}
