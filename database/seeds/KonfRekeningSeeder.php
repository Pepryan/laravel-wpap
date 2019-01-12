<?php

use Illuminate\Database\Seeder;

class KonfRekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konfig = [
            'bank' => 'BRI',
            'nama' => 'Febryan Ramadhan',
            'no_rek' => '098098139813'
        ];
        DB::table('konfig')->insert($konfig);
    }
}
