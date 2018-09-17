<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission;
        $permission->permission_name = 'desvEmpl';
        $permission->permission_description = 'desvinculacion empleados';
        $permission->id_padre = '4';
        $permission->save();

		$permission = new Permission;
        $permission->permission_name = 'reaPed';
        $permission->permission_description = 'realizar pedido';
        $permission->id_padre = '3';
        $permission->save();
        
        $permission = new Permission;
        $permission->permission_name = 'ctrlStock';
        $permission->permission_description = 'control de stock';
        $permission->id_padre = '3';
        $permission->save();
        
      
    }
}
