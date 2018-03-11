<?php

namespace Modules\BasAjax\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\BasAjax\Entities\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Model::unguard();
       factory(Contact::class,50)->create();
    }
}
