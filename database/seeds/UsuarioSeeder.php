<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nome' => 'aiqsedeadm',
            'email' => 'aiqsedeadm@aiqsede.com',
            'telefone' => '(44) 9 91-17-5624',
            'aniversario' => '09-11-1992',
            'senha' => bcrypt('aiqsede123'),
        ]);
    }
}
