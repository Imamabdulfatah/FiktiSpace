<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sport;
use App\Models\Art;
use App\Models\Register;
use App\Models\Confirm;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'category_id' => 1,
            'name' => 'Bem FIKTI',
            'username' => 'BemFiktiUg',
            'email' => 'pti.bemfiktiug@gmail.com',
            'password' => bcrypt('FiktiSpace2023Sukses'),
            'is_admin' => 1, 
            'remember_token' => Str::random(10),
        ]);

        // User::factory(10)->create();

        Register::create([
            'status' => 'open',
        ]);
        // Sport::create([
        //     'user_id' => '2',
        //     'category_id' => '3',
        //     'username' => 'Oalah',
        //     'ketua' => 'Ucok',
        //     'phone' => '083876540700',
        //     'email' => 'imamabdul@gmail.com',
        //     'anggota' => 'imam(201215, 2kb03) Ucok(217672, 2kb05)',
        //     'region' => 'depok',
        // ]);

        // Sport::factory(20)->create();

        // Art::create([
        //     'user_id' => '1',
        //     'category_id' => '5',
        //     'username' => 'Mantap Jiwa',
        //     'instansi' => 'Gunadarma',
        //     'phone' => '083876540700',
        //     'email' => 'imamabdul87@gmail.com',
        // ]);

        // Art::factory(20)->create();

        // // Confirm::factory(20)->create();
    }
}
