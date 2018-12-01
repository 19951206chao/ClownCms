<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 50)->create();

        $admin = Admin::find(1);

        $admin->name = 'admin';

        $admin->email = 'admin@admin.com';

        $admin->save();
    }
}
