<?php

use Illuminate\Database\Seeder;

class PostsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Post::class, 50)->create()->each(function ($po) {
            $po->save();
        });
    }
}
