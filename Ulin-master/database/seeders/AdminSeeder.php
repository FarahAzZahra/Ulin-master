<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = array(
            array(
                'name' => 'Farah Az Zahra',
                'username' => 'farrahazz',
                'email' => 'farahazzharra@gmail.com',
                'password' => bcrypt('farr@zzhr'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'name' => 'Masayu Anandita Prameswari',
                'username' => 'nandaaa23',
                'email' => 'ananditaprameswari23@gmail.com',
                'password' => bcrypt('masayu23'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'name' => 'Dika Fajar Ramadan',
                'username' => 'dikaa0707',
                'email' => 'dikafajar07@gmail.com',
                'password' => bcrypt('dikaafjr07'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        foreach($admin as $a){
            $adm = new Admin();
            $adm->name = $a['name'];
            $adm->username = $a['username'];
            $adm->email = $a['email'];
            $adm->password = $a['password'];
            $adm->created_at = $a['created_at'];
            $adm->updated_at = $a['updated_at'];
            $adm->save();
        }
    }
}
