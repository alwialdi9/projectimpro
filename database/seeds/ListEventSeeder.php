<?php

use Illuminate\Database\Seeder;
use App\ListEvent;

class ListEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListEvent::insert([
            'nama_event' => 'Jakarta Marathon',
            'mulai_acara' => '2020-06-24',
            'akhir_acara' => '2020-06-26',
            'lokasi' => 'Gelora Senayan',
            'status' => 'Sedang Berlangsung',
        ]);
    }
}
