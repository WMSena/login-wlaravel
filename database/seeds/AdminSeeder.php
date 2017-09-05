<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line("Creating User...");

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'Users@gmail.com',
            'password' => '1234',
        ]);
    }
}
