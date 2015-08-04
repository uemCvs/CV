<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class EmailSeeder extends Seeder {

    public function run()
    {
        DB::table('experiencias')->delete();

        $emails = [
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
          ['instituicao' => '1', 'cargo' => '1', 'anoIngresso' => '2001', 'anoTermino' => '2034'],
        ];

        foreach ($emails as $email) {
          \App\Experiencia::create($email);
        }
    }
}
