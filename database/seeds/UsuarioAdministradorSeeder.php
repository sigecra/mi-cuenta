<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'email' => 'rgt@hotmail.com',
            'password' => 'pass123'
      //      'password' => bcrypt('pass123')
            ]);

            $usuario = Usuario::create([
                'usuario' => 'rat',
                'nombre' => 'Miranda',
                'email' => 'mir@hotmail.com',
                'password' => 'pass123'
    //            'password' => bcrypt('pass123')
                ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);

       // $usuario->roles()->sync(1);

    }
}
