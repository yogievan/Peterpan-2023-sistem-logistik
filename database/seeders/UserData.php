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
                'nama_user' =>'Lussy Ernawati, S.Kom., M.Acc',
                'role' => 'pemohon',
                'username' => 'pemohon',
                'password' => bcrypt('pemohon'),
            ],
            [
                'nama_user' =>'PT. Nama User Pemasok Logistik',
                'role' => 'pemasok',
                'username' => 'pemasok',
                'password' => bcrypt('pemasok'),
            ],
            [
                'nama_user' =>'Nama User Logistik UKDW',
                'role' => 'logistik',
                'username' => 'logistik',
                'password' => bcrypt('logistik'),
            ],
            [
                'nama_user' =>'Dr. Ing. Wiyatiningsih, S.T., M.T. ',
                'role' => 'rektor',
                'username' => 'rektor',
                'password' => bcrypt('rektor'),
            ],
            [
                'nama_user' =>'Dr. Parmonangan Manurung, S.T., M.T., IAI.',
                'role' => 'wr3',
                'username' => 'wr3',
                'password' => bcrypt('wr3'),
            ],
            [
                'nama_user' =>'Nama User Biro 2 UKDW',
                'role' => 'biro2',
                'username' => 'biro2',
                'password' => bcrypt('biro2'),
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
