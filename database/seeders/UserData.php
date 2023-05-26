<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'nama_user' =>'User Pemohon Logistik',
                'jabatan' => 'Pemohon',
                'username' => 'pemohon',
                'password' => md5('pemohon'),
            ],
            [
                'nama_user' =>'User Pemasok Logistik',
                'jabatan' => 'Pemasok',
                'username' => 'Pemasok',
                'password' => md5('pemasok'),
            ],
            [
                'nama_user' =>'User Logistik',
                'jabatan' => 'Logistik',
                'username' => 'logistik',
                'password' => md5('logistik'),
            ],
            [
                'nama_user' =>'User Rektor',
                'jabatan' => 'Rektor',
                'username' => 'rektor',
                'password' => md5('rektor'),
            ],
            [
                'nama_user' =>'User WR3',
                'jabatan' => 'WR3',
                'username' => 'wr3',
                'password' => md5('wr3'),
            ],
            [
                'nama_user' =>'User Biro2',
                'jabatan' => 'Biro2',
                'username' => 'biro2',
                'password' => md5('biro2'),
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
