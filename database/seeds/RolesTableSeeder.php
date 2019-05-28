<?php

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
        {
            DB::table('roles')->insert([
                'id' => '1',
                'name' => 'ROLE_ADMIN',
                'description' => 'admin priviledge',
                
            ]);
            DB::table('roles')->insert([
                'id' => '2',
                'name' => 'ROLE_SUPER_ADMIN',
                'description' => 'super admin priviledge',
                
            ]);
    }
}
}
