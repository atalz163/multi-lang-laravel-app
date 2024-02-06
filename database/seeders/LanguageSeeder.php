<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'code' => 'en',
                'name' => 'english',
                'rtl' => false
            ],

            [
                'code' => 'ps',
                'name' => 'pashto',
                'rtl' => true
            ],

            [
                'code' => 'dr',
                'name' => 'dari',
                'rtl' => true
            ]
        ];

        foreach($languages as $language){
            Language::create([
                'code' => $language['code'],
                'name' => $language['name'],
                'rtl' => $language['rtl']
            ]);
        }




    }
}
