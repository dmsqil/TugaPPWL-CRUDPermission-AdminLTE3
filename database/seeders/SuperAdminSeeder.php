<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Dimas',
            'email' => 'superadmin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');
        // Creating Admin User
        $admin = User::create([
            'name' => 'Aqil',
            'email' => 'admin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');
        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Salsabil',
            'email' => 'operator@roles.id',
            'password' => Hash::make('123456')
        ]);
        $productManager->assignRole('Operator');

        //Tugas
        $adminBaak = User::create([
            'name' => "Adm Baak",
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminBaak->assignRole('Admin Baak'); 

        $adminKeuangan = User::create([
            'name' => "Adm Keuangan",
            'email' => 'adminkeuangan@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminKeuangan->assignRole('Admin Keuangan');
        
        $mahasiswa = User::create([
            'name' => "Mahasiswa",
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456')
        ]);
        $mahasiswa->assignRole('Mahasiswa');
    }
}