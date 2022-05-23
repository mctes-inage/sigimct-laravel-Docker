<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//SPATIE
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criacao de Tabela Permicoes 
        $permisos =[
            //tabela de roles
            'ver-rol',
            'criar-rol',
            'editar-rol',
            'deletar-rol',
            //tabela de blogs
            'ver-blog',
            'criar-blog',
            'editar-blog',
            'deletar-blog',
              //tabela de Usuarios
            'ver-usuario',
            'criar-usuario',
            'editar-usuario',
            'deletar-usuario'
             
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
