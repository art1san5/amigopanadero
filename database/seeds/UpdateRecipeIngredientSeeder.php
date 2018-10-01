<?php

use Illuminate\Database\Seeder;

class UpdateRecipeIngredientSeeder extends Seeder
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
                'dough' => json_encode([
                    array('item' => 'Montana Spring Hard Flour 40 Bakers% or 400g','bakers' => '40%','grams' => '400g'),
                    array('item' => 'Water 48 Bakers% or 120g','bakers' => '48%','grams' => '120g'),
                    array('item' => 'Instant Yeast','bakers' => '0.2%','grams' => '2g'),
                    array('item' => 'Skim Milk','bakers' => '0.4%','grams' => '40g'),
                    array('item' => 'Salt','bakers' => '1.5%','grams' => '15g'),
                    array('item' => 'Sugar','bakers' => '16%','grams' => '15g'),
                    array('item' => 'Shortening','bakers' => '4%','grams' => ',40g'),
                    array('item' => 'Bread Improver','bakers' => '0.4%','grams' => '4g'),
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',2)
            ->update([
                'dough' => json_encode([
                     array("item" => "Whole Wheat Flour","bakers" => "30%","grams" => "300g"),
                     array("item" => "Water","bakers" => "48%","grams" => "60g"),
                     array("item" => "Salt","bakers" => "1.5%","grams" => "15g"),
                     array("item" => "Brown Sugar","bakers" => "8%","grams" => "80g"),
                     array("item" => "Honey","bakers" => "6%","grams" => "60g"),
                     array("item" => "Shortening","bakers" => "4%","grams" => "40g"),
                     array("item" => "Milk Powder","bakers" => "4%","grams" => "40g"),
                     array("item" => "Molasses","bakers" => "2%","grams" => "20g"),
                     array("item" => "Improver","bakers" => "0.4%","grams" => "4g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',3)
            ->update([
                'dough' => json_encode([
                    array("item" => "Montana Spring Hard Flour", "bakers" => "100%", "grams" => "1000g"),
                    array("item" => "Water", "bakers" => "57%", "grams" => "570g"),
                    array("item" => "Water","bakers" => "57%","grams" => "570g"),
                    array("item" => "Instant Yeast, Low Sugar","bakers" => "1.0%","grams" => "10g"),
                    array("item" => "White Sugar","bakers" => "1.0%","grams" => "10g"),
                    array("item" => "Salt","bakers" => "2.0%","grams" => "20g"),
                    array("item" => "Improver","bakers" => "0.6%","grams" => "6g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',4)
            ->update([
                'dough' => json_encode([
                    array("item" => "Montana Spring Hard Flour","bakers" => "100%","grams" => "1000g"),
                    array("item" => "Water","bakers" => "50","grams" => "500g"),
                    array("item" => "Instant Yeast","bakers" => "1%","grams" => "10g"),
                    array("item" => "Sugar","bakers" => "15%","grams" => "150g"),
                    array("item" => "Salt","bakers" => "1.5%","grams" => "15g"),
                    array("item" => "Milk Powder","bakers" => "4%","grams" => "40g"),
                    array("item" => "Bread Improvers","bakers" => "0.4","grams" => "4g"),
                    array("item" => "Shortening","bakers" => "8%","grams" => "80g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',5)
            ->update([
                'dough' => json_encode([
                    array("item" => "Family All Purpose Flour","bakers" => "100%","grams" => "300g"),
                    array("item" => "Cocoa Powder","bakers" => "33.33%","grams" => "100g"),
                    array("item" => "Baking Powder","bakers" => "1.0%","grams" => "3g"),
                    array("item" => "Brown Sugar","bakers" => "133.3%","grams" => "400g"),
                    array("item" => "White Sugar","bakers" => "83.3%","grams" => "250g"),
                    array("item" => "Eggs","bakers" => "100%","grams" => "300g"),
                    array("item" => "Butter","bakers" => "50%","grams" => "150g"),
                    array("item" => "Margarine","bakers" => "25%","grams" => "75g"),
                    array("item" => "Glucose","bakers" => "20%","grams" => "60g"),
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',6)
            ->update([
                'dough' => json_encode([
                    array("item" => "Snow silk cake flour","bakers" => "100%","grams" => "250g"),
                    array("item" => "Baking powder","bakers" => "2%","grams" => "5g"),
                    array("item" => "Salt","bakers" => "1.2%","grams" => "3g"),
                    array("item" => "Cocoa powder","bakers" => "8%","grams" => "20g"),
                    array("item" => "Unsalted butter","bakers" => "58%","grams" => "114g"),
                    array("item" => "White sugar","bakers" => "120%","grams" => "300g"),
                    array("item" => "Whole Eggs","bakers" => "60%","grams" => "150g"),
                    array("item" => "Vanilla","bakers" => "1.6%","grams" => "4g"),
                    array("item" => "Fresh milk","bakers" => "96%","grams" => "240g"),
                    array("item" => "Red food color","bakers" => "6%","grams" => "15g"),
                    array("item" => "Vinegar","bakers" => "2%","grams" => "5g"),
                    array("item" => "Baking soda","bakers" => "2%","grams" => "5g")
                 ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);


        DB::table('recipes')
            ->where('id',7)
            ->update([
                'dough' => json_encode([
                    array("item" => "Goldkey soft flour","bakers" => "100%","grams" => "500g"),
                    array("item" => "Butter","bakers" => "64%","grams" => "320g"),
                    array("item" => "White sugar","bakers" => "61%","grams" => "305g"),
                    array("item" => "Brown sugar","baker" => "58%","grams" => "209g"),
                    array("item" => "Peanut butter","bakers" => "70%","grams" => "350g"),
                    array("item" => "Egg","bakers" => "28%","grams" => "140g"),
                    array("item" => "Baking soda","bakers" => "1.8%","grams" => "9g"),
                    array("item" => "Baking powser","bakers" => "1.1%","grams" => "5.5g"),
                    array("item" => "Salt","bakers" => "0.6%","grams" => "3g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',8)
            ->update([
                'dough' => json_encode([
                    array("item" => "Snow silk cake flour","bakers" => "50%","grams" => "120g"),
                    array("item" => "Montana spring hard flour","bakers" => "50%","grams" => "120g"),
                    array("item" => "White sugar","bakers" => "62.50%","grams" => "150g"),
                    array("item" => "Brown sugar","bakers" => "37.5%","grams" => "90g"),
                    array("item" => "Eggs","bakers" => "50%","grams" => "150g"),
                    array("item" => "Butter","bakers" => "50%","grams" => "120g"),
                    array("item" => "Salt","bakers" => "0.8%","grams" => "1.92g"),
                    array("item" => "Peeled banana","bakers" => "67.5%","grams" => "160g"),
                    array("item" => "Baking powder","bakers" => "2.5%","grams" => "6g"),
                    array("item" => "Baking soda","bakers" => "0.8%","grams" => "2g"),
                    array("item" => "Water","bakers" => "31.2%","grams" => "75g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',9)
            ->update([
                'dough' => json_encode([
                    array("item" => "Whole eggs","bakers" => " 50%","grams" => "200g"),
                    array("item" => "Brown sugar","bakers" => "150%","grams" => "600g"),
                    array("item" => "Vanilla as desired","bakers" => "","grams" => ""),
                    array("item" => "Melted butter","bakers" => "55%","grams" => "200g"),
                    array("item" => "Corn syrup","bakers" => "15%","grams" => "60g"),
                    array("item" => "Family all purpose flour","bakers" => "100%","grams" => "400g"),
                    array("item" => "Baking powder","bakers" => "3%","grams" => "12g"),
                    array("item" => "Salt","bakers" => "1%","grams" => "4g"),
                    array("item" => "Cashew nuts, chopped","bakers" => "56%","grams" => "260g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',10)
            ->update([
                'dough' => json_encode([
                    array("item" => "Goldkey soft flour","bakers" => "100%","grams" => "500g"),
                    array("item" => "Salt","bakers" => "0.4%","grams" => "2g"),
                    array("item" => "Baking soda","bakers" => "1%","grams" => "5g"),
                    array("item" => "Unsalted butter","bakers" => "28%","grams" => "140g"),
                    array("item" => "Powdered Sugar","bakers" => "58%","grams" => " 290g"),
                    array("item" => "Eggs","bakers" => "6.8%","grams" => "34g"),
                    array("item" => "Vanilla","bakers" => "1%","grams" => "5g")
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);


    }
}
