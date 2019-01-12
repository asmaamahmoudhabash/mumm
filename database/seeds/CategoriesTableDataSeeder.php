<?php

use Illuminate\Database\Seeder;

class CategoriesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Category::class, 50)->create()->each(function ($ca) {
            $ca->save();
        });
    }
}
