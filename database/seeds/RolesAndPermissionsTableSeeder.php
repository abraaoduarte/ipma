<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('roles')->delete();
        DB::table('roles')->truncate();

        DB::table('permissions')->delete();
        DB::table('permissions')->truncate();

        DB::table('role_user')->delete();
    	DB::table('role_user')->truncate();

    	DB::table('permission_user')->delete();
    	DB::table('permission_user')->truncate();

    	DB::table('permission_role')->delete();
        DB::table('permission_role')->truncate();

        $roles = [
    		'administrador' => Defender::createRole('Administrador'),
    		'site'          => Defender::createRole('Site'),
    		'secretario'    => Defender::createRole('Secretário'),
    		'tesoureiro'    => Defender::createRole('Tesoureiro'),
        ];

        $permissions = [
    		'users.create'       => 'Criar usuários',
    		'users.index'        => 'Listar usuários',
    		'users.show'         => 'Ver usuários',
    		'users.edit'         => 'Editar usários',
    		'users.delete'       => 'Deletar usuários',
    		'users.permissions'  => 'Gerenciar permissões',
        ];

        foreach($permissions as $name => $description) {
        	$permission = Defender::createPermission($name, $description);
        	$roles['administrador']->attachPermission($permission);
        }

        $roles['site']->attachPermission(Defender::findPermission('users.index'));
        $roles['secretario']->attachPermission(Defender::findPermission('users.index'));
        $roles['tesoureiro']->attachPermission(Defender::findPermission('users.index'));

        User::first()->attachRole($roles['administrador']);

    	Schema::enableForeignKeyConstraints();

    }
}
