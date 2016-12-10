<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
        factory(App\Contact::class, 50)->create();
    }
}
