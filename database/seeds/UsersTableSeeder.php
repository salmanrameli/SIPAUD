<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'password' => bcrypt('admin'),
            'nama' => 'admin',
            'alamat' => 'alamat 1',
            'jenis_kelamin' => 'Laki Laki',
            'telepon' => '1111',
            'tanggal_lahir' => '2016-12-01',
            'email' => 'admin@admin.com',
            'tahun_masuk' => '2016',
            'jabatan' => 'Tata Usaha'
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'password' => bcrypt('guru'),
            'nama' => 'guru',
            'alamat' => 'alamat 2',
            'jenis_kelamin' => 'Laki Laki',
            'telepon' => '2222',
            'tanggal_lahir' => '2016-12-01',
            'email' => 'guru@guru.com',
            'tahun_masuk' => '2016',
            'jabatan' => 'Guru'
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'password' => bcrypt('kepsek'),
            'nama' => 'kepala sekolah',
            'alamat' => 'alamat 3',
            'jenis_kelamin' => 'Laki Laki',
            'telepon' => '3333',
            'tanggal_lahir' => '2016-12-01',
            'email' => 'kepsek@kepsek.com',
            'tahun_masuk' => '2016',
            'jabatan' => 'Kepala Sekolah'
        ]);
    }
}
