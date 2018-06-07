<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];

        for ($i = 1; $i <= 50; $i++) {
            $users[] = [
                'name' => "user$i",
                'email' => "user$i@test.com",
                'password' => bcrypt('password'),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('users')->insert($users);
    }
}
