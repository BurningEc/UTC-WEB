<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Convenio;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resetea el cache el los roles y permisos
        app()['cache']->forget('spatie.permission.cache');


        /// crea los permisos para el crud del roles
        ///
        Permission::create(['name' => 'crear rol', 'state' => 1, 'modulo' => 'Roles', 'description' => 'Permite crear un rol']);
        Permission::create(['name' => 'leer rol', 'state' => 1, 'modulo' => 'Roles', 'description' => 'Permite ver un rol']);
        Permission::create(['name' => 'modificar rol', 'state' => 1, 'modulo' => 'Roles', 'description' => 'Permite modificar un rol']);
        Permission::create(['name' => 'eliminar rol', 'state' => 1, 'modulo' => 'Roles', 'description' => 'Permite eliminar un rol']);

        /// crea los permisos para el crud del usuario
        ///
        Permission::create(['name' => 'crear usuario', 'state' => 1, 'modulo' => 'Usuarios', 'description' => 'Permite crear un usuario']);
        Permission::create(['name' => 'leer usuario', 'state' => 1, 'modulo' => 'Usuarios', 'description' => 'Permite ver un usuario']);
        Permission::create(['name' => 'modificar usuario', 'state' => 1, 'modulo' => 'Usuarios', 'description' => 'Permite modificar un usuario']);
        Permission::create(['name' => 'eliminar usuario', 'state' => 1, 'modulo' => 'Usuarios', 'description' => 'Permite eliminar un usuario']);


        /// crea los permisos para el crud delas categorias

        Permission::create(['name' => 'crear categoria', 'state' => 1, 'modulo' => 'Categorías', 'description' => 'Permite crear una categoría']);
        Permission::create(['name' => 'leer categoria', 'state' => 1, 'modulo' => 'Categorías', 'description' => 'Permite leer una categoría']);
        Permission::create(['name' => 'modificar categoria', 'state' => 1, 'modulo' => 'Categorías', 'description' => 'Permite modificar una categoría']);
        Permission::create(['name' => 'eliminar categoria', 'state' => 1, 'modulo' => 'Categorías', 'description' => 'Permite eliminar una categoría']);


        /// crea los permisos para el crud de los productos
        Permission::create(['name' => 'crear producto', 'state' => 1, 'modulo' => 'Productos', 'description' => 'Permite crear un producto']);
        Permission::create(['name' => 'leer producto', 'state' => 1, 'modulo' => 'Productos', 'description' => 'Permite leer un producto']);
        Permission::create(['name' => 'modificar producto', 'state' => 1, 'modulo' => 'Productos', 'description' => 'Permite modificar un producto']);
        Permission::create(['name' => 'eliminar producto', 'state' => 1, 'modulo' => 'Productos', 'description' => 'Permite eliminar un producto']);

        //permisos para los clientes
        Permission::create(['name' => 'crear clientes', 'state' => 1, 'modulo' => 'Clientes', 'description' => 'Permite crear un cliente']);
        Permission::create(['name' => 'leer clientes', 'state' => 1, 'modulo' => 'Clientes', 'description' => 'Permite leer un cliente']);
        Permission::create(['name' => 'modificar clientes', 'state' => 1, 'modulo' => 'Clientes', 'description' => 'Permite modificar un cliente']);
        Permission::create(['name' => 'eliminar clientes', 'state' => 1, 'modulo' => 'Clientes', 'description' => 'Permite eliminar un cliente']);

        //permisos para las ordenes o pedidos

        Permission::create(['name' => 'crear orden', 'state' => 1, 'modulo' => 'Ordenes', 'description' => 'Permite crear una orden']);
        Permission::create(['name' => 'leer orden', 'state' => 1, 'modulo' => 'Ordenes', 'description' => 'Permite leer una orden']);
        Permission::create(['name' => 'modificar orden', 'state' => 1, 'modulo' => 'Ordenes', 'description' => 'Permite modificar una orden']);
        Permission::create(['name' => 'eliminar orden', 'state' => 1, 'modulo' => 'Ordenes', 'description' => 'Permite eliminar una orden']);

//permisos para las solicitudes

        Permission::create(['name' => 'crear solicitud', 'state' => 1, 'modulo' => 'Solicitudes', 'description' => 'Permite crear una solicitud']);
        Permission::create(['name' => 'leer solicitud', 'state' => 1, 'modulo' => 'Solicitudes', 'description' => 'Permite leer una solicitud']);
        Permission::create(['name' => 'modificar solicitud', 'state' => 1, 'modulo' => 'Solicitudes', 'description' => 'Permite modificar una solicitud']);
        Permission::create(['name' => 'eliminar solicitud', 'state' => 1, 'modulo' => 'Solicitudes', 'description' => 'Permite eliminar una solicitud']);
//permisos para las empresas
        Permission::create(['name' => 'crear empresa', 'state' => 1, 'modulo' => 'Empresas', 'description' => 'Permite crear una empresa']);
        Permission::create(['name' => 'leer empresa', 'state' => 1, 'modulo' => 'Empresas', 'description' => 'Permite leer una empresa']);
        Permission::create(['name' => 'modificar empresa', 'state' => 1, 'modulo' => 'Empresas', 'description' => 'Permite modificar una empresa']);
        Permission::create(['name' => 'eliminar empresa', 'state' => 1, 'modulo' => 'Empresas', 'description' => 'Permite eliminar una empresa']);
//permisos para los repartidores
        Permission::create(['name' => 'crear repartidor', 'state' => 1, 'modulo' => 'Repatidores', 'description' => 'Permite crear un repartidor']);
        Permission::create(['name' => 'leer repartidor', 'state' => 1, 'modulo' => 'Repatidores', 'description' => 'Permite leer un repartidor']);
        Permission::create(['name' => 'modificar repartidor', 'state' => 1, 'modulo' => 'Repatidores', 'description' => 'Permite modificar un repartidor']);
        Permission::create(['name' => 'eliminar repartidor', 'state' => 1, 'modulo' => 'Repatidores', 'description' => 'Permite eliminar un repartidor']);

        //permisos para los configuraciones
        Permission::create(['name' => 'crear item', 'state' => 1, 'modulo' => 'Configuración web', 'description' => 'Permite crear un item']);
        Permission::create(['name' => 'leer item', 'state' => 1, 'modulo' => 'Configuración web', 'description' => 'Permite leer un item']);
        Permission::create(['name' => 'modificar item', 'state' => 1, 'modulo' => 'Configuración web', 'description' => 'Permite modificar un item']);
        Permission::create(['name' => 'eliminar item', 'state' => 1, 'modulo' => 'Configuración web', 'description' => 'Permite eliminar un item']);


        /// cramos los roles para que son admin, tecnico1, tecnico 2, clinete
        $role = Role::create(['name' => 'Administrador', 'status' => 'activo']);

        //asignacion de los permisos al rol admin
        $role->givePermissionTo(Permission::all());

        ///<<<<----------- ROL CLIENTE  PERMISOS ----->>>>
        $role = Role::create(['name' => 'Cliente', 'status' => 'activo']);
        //asignacion de los permisos al rol
        $role->givePermissionTo('leer usuario');
        $role->givePermissionTo('leer producto');
        $role->givePermissionTo('leer categoria');

        ///<<<<----------- ROL CLIENTE  PERMISOS ----->>>>
        $role = Role::create(['name' => 'Empresario', 'status' => 'activo']);
        //asignacion de los permisos al rol
        $role->givePermissionTo('leer usuario');
        $role->givePermissionTo('leer producto');
        $role->givePermissionTo('leer categoria');

        ///<<<<----------- ROL CLIENTE  PERMISOS ----->>>>
        $role = Role::create(['name' => 'Repartidor', 'status' => 'activo']);
        //asignacion de los permisos al rol
        $role->givePermissionTo('leer usuario');
        $role->givePermissionTo('leer producto');
        $role->givePermissionTo('leer categoria');


        /*
            'name','username','url_image', 'email','password',
        */

        ///crearmos el usario por defecto
        $user_password = Hash::make('root1234');
        $user = User::create([
            'name' => 'David',
            'username' => 'admin',
            'status' => 'activo',
            'url_image' => '#',
            'email' => 'admin@gmail.com',
            'password' => $user_password]);

        $user->assignRole('Administrador');

        $convenio_base = Convenio::create([
            'name' => 'Convenio base',
            'legal_representative' => 'DUEÑO DEL CONVENIO',
            'start' => '2020/12/12',
            'end' => '2020/06/12',
            'url_document' => 'storage/documents/convenio-1594432102.pdf',
            'status' => 'base'
        ]);
    }
}
