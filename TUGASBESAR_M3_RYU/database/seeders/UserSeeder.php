<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Admin Kos',      'email' => 'admin@kos.test', 'password' => 'password', 'role' => 'admin'],
            ['name' => 'Staff Kos',      'email' => 'staff@kos.test', 'password' => 'password', 'role' => 'staff'],
            ['name' => 'Pengguna Biasa', 'email' => 'user@kos.test',  'password' => 'password', 'role' => 'user'],
        ];

        foreach ($users as $data) {
            // firstOrNew: aman dijalankan berulang kali (tidak menggandakan data)
            $user = User::firstOrNew(['email' => $data['email']]);
            $user->name     = $data['name'];
            $user->password = Hash::make($data['password']);
            $user->role     = $data['role'];
            $user->save();
        }
    }
}