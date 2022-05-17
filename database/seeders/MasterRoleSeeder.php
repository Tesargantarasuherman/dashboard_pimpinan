<?php

namespace Database\Seeders;

use App\Models\MasterRole;
use Illuminate\Database\Seeder;

class MasterRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterRole::truncate();
        MasterRole::insert([
            [
                'nama' => 'Administrator',
                'id' => '1',
            ],
            [
                'nama' => 'Kepala Dinas',
                'id' => '2',
            ]
        ]);
    }
}
