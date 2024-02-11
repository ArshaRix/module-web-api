<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use Spatie\Permission\PermissionRegistrar;
use Modules\User\App\Models\User;

class UserAccountSeeder extends Seeder {

    public function run(): void {

        $masterRole = Role::create(['name' => 'master']);
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $userRole = Role::create(['name' => 'user']);

        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);        

        $masterRole -> givePermissionTo([
            'view users', 'create users', 'edit users', 'delete users',
            'view posts', 'create posts', 'edit posts', 'delete posts',
        ]);

        $adminRole -> givePermissionTo([
            'view users', 'edit users', 'delete users',
            'view posts', 'create posts', 'edit posts', 'delete posts',
        ]);

        $moderatorRole -> givePermissionTo([
            'view users',
            'view posts', 'create posts', 'edit posts', 'delete posts',
        ]);

        $userRole -> givePermissionTo([
            'view posts', 'create posts', 'edit posts', 'delete posts',
        ]);

        $user = User::factory() -> create([
            'name' => 'purgatory',
            'email' => 'purgatory@senate.gov',
            'account_id' => '32496',
        ]);
        $user -> assignRole($adminRole);

       $user = User::factory() -> create([
            'name' => 'W Pury',
            'email' => 'wpury2@amazon.co.uk',
            'account_id' => '28647',
        ]);
        $user -> assignRole($moderatorRole);
        
        $user = User::factory() -> create([
            'name' => 'C Baudet',
            'email' => 'cbaudet0@forbes.com',
            'account_id' => '37548',
        ]);
        $user -> assignRole($userRole);

    }
}
