<?php

use Illuminate\Database\Seeder;

class CrudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Crud::class, 5)->create();
    }
}
