<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class EnderecoSeeder extends Seeder {

    public function run()
    {
        DB::table('enderecos')->delete();

        User::create(['pais' => 'mocambique','provincia' => 'maputo','distrito' => 'marracuene','bairro' => 'Cumbeza','rua' => 'hshdg','avenida' => 'de mocambique','nrDeCasa' => '12','quarteirao' => '12']);
    }

}

