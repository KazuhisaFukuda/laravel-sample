<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [];

        for ($i = 1; $i <= 50; $i++) {
            $admins[] = [
                'name' => "admin$i",
                'email' => "admin$i@test.com",
                'password' => bcrypt('password'),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('admins')->insert($admins);
    }
}
