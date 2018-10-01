<?php

use Illuminate\Database\Seeder;

class RecipeTotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')
            ->where('id',1)
            ->update([
                'total' => json_encode([
                    'bakers' => '171.3',
                    'grams' => '1,713'
                ])
            ]);

        DB::table('recipes')
            ->where('id',2)
            ->update([
                'total' => json_encode([
                    'bakers' => '175.4',
                    'grams' => '1,754'
                ])
            ]);

         DB::table('recipes')
            ->where('id',3)
            ->update([
                'total' => json_encode([
                    'bakers' => '162.6',
                    'grams' => '1,626'
                ])
            ]);

        DB::table('recipes')
            ->where('id',4)
            ->update([
                'total' => json_encode([
                    'bakers' => '179.9',
                    'grams' => '1,799'
                ])
            ]);

         DB::table('recipes')
            ->where('id',5)
            ->update([
                'total' => json_encode([
                    'bakers' => '545.9',
                    'grams' => '1,638'
                ])
            ]);

        DB::table('recipes')
            ->where('id',6)
            ->update([
                'total' => json_encode([
                    'bakers' => '456.8',
                    'grams' => '1,111'
                ])
            ]);

        DB::table('recipes')
            ->where('id',7)
            ->update([
                'total' => json_encode([
                    'bakers' => '384.5',
                    'grams' => '1,841.5'
                ])
            ]);

        DB::table('recipes')
            ->where('id',8)
            ->update([
                'total' => json_encode([
                    'bakers' => '402.8',
                    'grams' => '994.92'
                ])
            ]);

        DB::table('recipes')
            ->where('id',9)
            ->update([
                'total' => json_encode([
                    'bakers' => '439',
                    'grams' => '1,756'
                ])
            ]);

        DB::table('recipes')
            ->where('id',10)
            ->update([
                'total' => json_encode([
                    'bakers' => '212.8',
                    'grams' => '930'
                ])
            ]);




    }
}
