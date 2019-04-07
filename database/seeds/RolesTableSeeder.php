<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new Role();

        $role->name='Admin';
        $role->slug='admin';
        $role->save();

        $role1=new Role();
        $role1->name='Author';
        $role1->slug='autho';
        $role1->save();

        $role2=new Role();
        $role2->name='Mashud';
        $role2->slug='mashud';
        $role2->save();
    }
}
