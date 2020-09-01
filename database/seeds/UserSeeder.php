<?php
use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = Role::where('slug','web-developer')->first();
        $manager = Role::where('slug', 'project-manager')->first();
        $admin_role = Role::where('slug', 'admin')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $admin =  User::find(1);
        $admin->password = bcrypt('123456789');
        $admin->roles()->attach($admin_role);
        $admin->permissions()->attach($manageUsers);
        $admin->save();


    }
}
