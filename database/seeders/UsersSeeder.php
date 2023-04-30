<?php

namespace Database\Seeders;

use App\Models\AppUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'nama' => 'Administrator Diskominfo Demo',
                'email' => 'admindiskominfo@bandung.go.id',
                'id_role' => '1',
                'password' => Hash::make('123456'),
            ],
            [
                'nama' => 'Kepala Dinas Demo',
                'email' => 'kepaladinas@bandung.go.id',
                'id_role' => '2',
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}
