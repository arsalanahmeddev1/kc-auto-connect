<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com'
        ]);
        $role = Role::where('name', 'user')->first();
        $user->assignRole($role);

        $user = User::factory()->create([
            'name' => 'Vendor',
            "email" => "vendor@example.com",
        ]);
        $role = Role::where('name', 'vendor')->first();
        $user->assignRole($role);
        $vendors = User::factory(10)->create();
        foreach ($vendors as $vendor)
        {
            $vendor->assignRole($role);
        }

        $user = User::factory()->create([
            'name' => 'Admin',
            "email" => "admin@example.com"
        ]);
        $role = Role::where('name', 'admin')->first();
        $user->assignRole($role);
    }
}
