<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario'=>'admin',
            'nombre'=>'Administrador del Sistema',
            'password'=>bcrypt('pass123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario')->insert([
            'usuario'=>'rat',
            'nombre'=>'Usuario de Prueba',
            'password'=>bcrypt('pass123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
