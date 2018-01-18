<?php

use Illuminate\Database\Seeder;
use App\Jabatan;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
        	'kod'	=> 'MADA',
        	'nama'	=> 'Lembaga Kemajuan Pertanian Muda'
        ]);

        Jabatan::create([
            'kod'   => 'LPP',
            'nama'  => 'Lembaga Pertubuhan Peladang'
        ]);

        Jabatan::create([
        	'kod'	=> 'FAMA',
        	'nama'	=> 'Lembaga Pertubuhan Peladang'
        ]);


    }
}
