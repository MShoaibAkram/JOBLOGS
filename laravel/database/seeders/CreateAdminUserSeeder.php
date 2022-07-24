<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable();
        $users = array();
        $users[] = array(
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => bcrypt('secret'),
            "country_code" => 44
        );

        $role = Role::where('name', 'admin')->first();

        foreach ($users as $user) {
            $user = User::create($user);
            $user->assignRole([$role->id]);
        }


    }

    private function truncateTable(){
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
