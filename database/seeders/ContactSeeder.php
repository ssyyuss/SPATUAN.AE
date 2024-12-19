<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     ## tambahkan use disini
    public function run()
    {
        Contact::factory(5)->create();
    }
}
