<?php

namespace Database\Seeders;

use App\Models\tb_curso;
use App\Models\tb_perfil;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //perfil developer
        $perfil_dev = new tb_perfil();
        $perfil_dev->nom_perfil = 'DEV_ADMIN';
        $perfil_dev->save();
        //perfil admin
        $perfil_admin = new tb_perfil();
        $perfil_admin->nom_perfil = 'ADMINISTRADOR';
        $perfil_admin->save();
        //perfil usuario
        $perfil_user = new tb_perfil();
        $perfil_user->nom_perfil = 'USUARIO';
        $perfil_user->save();

        //datos Miguel - ADMIN_DEV
        $dev_miguel = new User();
        $dev_miguel->id_perfil = 1;
        $dev_miguel->name = 'Miguel Nieto';
        $dev_miguel->email = 'miguel@correo.com';
        $dev_miguel->password = '$2y$10$gIkzV1HgY6FvrBzrEXgjCevek/Xy6KSndzq4NuiSoxz6FVF0rOIdq'; //miguel2020
        $dev_miguel->save();
        //datos Miguel - ADMIN
        $admin_paola = new User();
        $admin_paola->id_perfil = 2;
        $admin_paola->name = 'Paola Cuadros';
        $admin_paola->email = 'paola@correo.com';
        $admin_paola->password = '$2y$10$2Fq3CuQkgkXuccaMH9EkbubyB6FUz/LwJQ7l5cypJl3pn/HpTVq.i'; //bitpaola
        $admin_paola->save();
        //datos alejandro - USUARIO
        $user_alejandro = new User();
        $user_alejandro->id_perfil = 3;
        $user_alejandro->name = 'Alejandro Diaz';
        $user_alejandro->email = 'alejo@correo.com';
        $user_alejandro->password = '$2y$10$Ib.7ICR6Tgi7GFQrH.xWyOS0A/KOFQLuBKGMUnwdCkyVRIAOAOITi'; //alejo2020
        $user_alejandro->save();
        //cursos
        tb_curso::factory(50)->create();
    }
}
