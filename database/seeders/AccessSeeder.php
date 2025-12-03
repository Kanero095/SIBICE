<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account = [
            [
                'google_id'=>null,
                'google_token'=>null,
                'google_refresh_token'=>null,
                'name' => 'Kanero',
                'email' => 'kanero@zero.com',
                'password' => bcrypt('kan123'),
                'roles' => 'Super Admin',
                'noContact' => 'xxxx-xxxx-xxxx',
                'email_verified_at' => '2024-10-16 00:00:00',
            ],
            [
                'name' => 'dinkopukmprov_sumsel',
                'email' => 'dinkopukmprov@sumsel.com',
                'password' => bcrypt('dinkopukm2024'),
                'roles' => 'Admin',
                'noContact' => 'xxxx-xxxx-xxxx',
                'email_verified_at' => '2024-10-16 00:00:00',
            ],
            [
                'name' => 'SIBICE',
                'email' => 'sibice@inkubator.com',
                'password' => bcrypt('sibice2024s'),
                'roles' => 'Admin',
                'noContact' => '082180586327',
                'email_verified_at' => '2024-10-16 00:00:00',
            ]
        ];
        foreach ($account as $key => $value)
        {
            User::create($value);
        }
    }
}
