<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Usuarios
 	
        //Navegar
        Permission::create([
        	'name'         => 'Navegar usuarios',
        	'slug'         => 'users.index',
        	'description'  => 'Lista y navega todos los usuarios del sistema',
        ]);
        
        //Ver
        Permission::create([
        	'name'         => 'Ver detalle de usuario',
        	'slug'         => 'users.show',
        	'description'  => 'Ver en detalle cada usuario del sistema',
        ]);
        
        //Editar
        Permission::create([
        	'name'         => 'Edición de usuarios',
        	'slug'         => 'users.edit',
        	'description'  => 'Edita cualquier dato de un usuario del sistema',
        ]);
        
        //Eliminar
        Permission::create([
        	'name'         => 'Eliminar Usuario',
        	'slug'         => 'users.destroy',
        	'description'  => 'Eliminar cualquier usuario del sistema',
        ]);

        //ROLES
        Permission::create([
        	'name'         => 'Navegar roles',
        	'slug'         => 'roles.index',
        	'description'  => 'Lista y navega todos los roles del sistema',
        ]);
        
        //Ver
        Permission::create([
        	'name'         => 'Ver detalle de roles',
        	'slug'         => 'roles.show',
        	'description'  => 'Ver en detalle cada rol del sistema',
        ]);

         //Crear
         Permission::create([
        	'name'         => 'Edición de roles',
        	'slug'         => 'roles.create',
        	'description'  => 'Edita cualquier dato de un rol del sistema',
        ]);
        
        
        //Editar
        Permission::create([
        	'name'         => 'Edición de roles',
        	'slug'         => 'roles.edit',
        	'description'  => 'Edita cualquier dato de un usuario del sistema',
        ]);
        
        //Eliminar
        Permission::create([
        	'name'         => 'Eliminar rol',
        	'slug'         => 'roles.destroy',
        	'description'  => 'Eliminar cualquier rol del sistema',
        ]);

        //PACKAGES
        Permission::create([
        	'name'         => 'Navegar paquetes',
        	'slug'         => 'packages.index',
        	'description'  => 'Lista y navega todos los paquetes en el sistema',
        ]);
        
        //Ver
        Permission::create([
        	'name'         => 'Ver detalle de paquetes',
        	'slug'         => 'packages.show',
        	'description'  => 'Ver en detalle cada rol del sistema',
        ]);

         //Crear
         Permission::create([
        	'name'         => 'Edición de paquetes',
        	'slug'         => 'packages.create',
        	'description'  => 'Crea cualquier paquete en el sistema',
        ]);
        
        
        //Editar
        Permission::create([
        	'name'         => 'Edición de paquetes',
        	'slug'         => 'packages.edit',
        	'description'  => 'Edita cualquier dato de un paquete del sistema',
        ]);
        
        //Eliminar
        Permission::create([
        	'name'         => 'Eliminar paquete',
        	'slug'         => 'packages.destroy',
        	'description'  => 'Eliminar cualquier paquete del sistema',
        ]);




    }
}
