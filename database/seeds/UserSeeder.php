<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Abidin',
                'email' => 'abidin@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'walikelas',
                'absen' =>  0
            ],
            [
                'nama' => 'Sueb',
                'email' => 'sueb@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'pengurus',
                'absen' => 1,
            ],
        ]);
        DB::table('detail_users')->insert([
            [
                'kode_kelas' => 'aofghc',
                'id_user' => 1,
            ],
            [
                'kode_kelas' => 'aofghc',
                'id_user' => 2,
            ],
        ]);
        DB::table('kelas')->insert([
            [
                'kode_kelas' => 'aofghc',
                'nama_kelas' => 'Caem Class',
            ],
        ]);
    }
}
