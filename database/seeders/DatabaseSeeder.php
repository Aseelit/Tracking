<?php

namespace Database\Seeders;

use CreateUsersTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(1)->create();
        // $this->call(PermissionTableSeeder::class);     
            // $this->call(CreateAdminUserSeeder::class);    
        // $this->call(StagesSeeder::class);      
            // \App\Models\Stages::factory(5)->create();   
            \App\Models\Project::factory(1)->create();   
        
    }
}
