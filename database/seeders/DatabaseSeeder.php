<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ActivitySeeder::class,
            CriteriaSeeder::class,
            AlternativeSeeder::class,
            // DataKkSeeder::class,
            // PendudukSeeder::class,
            // WargaSeeder::class,
            // DataRtSeeder::class,
            PenilaianSeeder::class,

        ]);

    }
}
