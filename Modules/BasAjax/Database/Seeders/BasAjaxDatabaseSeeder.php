<?php

namespace Modules\BasAjax\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\BasAjax\Entities\Contact;

class BasAjaxDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ContactsTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
