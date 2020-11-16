<?php

use Illuminate\Database\Seeder;
use App\Event;

class DataEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            'nama_event' => 'Jakarta Marathon',
            'email' => 'alwi@gmail.com',
            'surat_pengantar' => 'pengantar marathon.pdf',
            'proposal_acara' => 'proposal acara marathon.pdf',
            'proposal_keramaian' => 'proposal kepolisian marathon.pdf',
            'deskripsi_event' => 'Acara marathon yang diselenggarakan oleh pemda DKI untuk memperkenalkan lingkungan jakarta kepada masyarakat domestik dan manca negara',
            'mulai_acara' => '2020-06-24',
            'akhir_acara' => '2020-06-26',
            'lokasi' => 'Gelora Senayan',
        ]);
    }
}
