<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederInsertCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (!DB::table('categories')->exists()) {
        DB::table('categories')->insert([
                "name" => "Vehículos",
        ]);
        DB::table('categories')->insert([
                "name" => "Tecnología",
        ]);
        DB::table('categories')->insert([
                "name" => "Deportes y aire libre",
        ]);
        DB::table('categories')->insert([
                "name" => "Belleza y cuidado personal",
        ]);
        DB::table('categories')->insert([
                "name" => "Libros",
        ]);
        DB::table('categories')->insert([
                "name" => "Instrumentos musicales",
        ]);
      }
    }
}
