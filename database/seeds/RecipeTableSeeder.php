<?php

use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            array(
                'user_id' => '1',
                'video_id' => '1',
                'category_id' => '2',
                'featured' => 'http://206.189.33.253/storage/features/loaf_o.jpg',
                'title' => 'Loaf Bread',
                'sponge' => json_encode([
                    'Montana Spring Hard Flour 60 Bakers% or 600g',
                    'Instant Yeast 0.8 Bakers% or 8g',
                    'Water 60 Bakers% or 360g',
                ]),
                'dough' => json_encode([
                    'Montana Spring Hard Flour 40 Bakers% or 400g',
                    'Water 48 Bakers% or 120g',
                    'Instant Yeast 0.2 Bakers% or 2g',
                    'Skim Milk 0.4 Bakers% or 40g',
                    'Salt 1.5 Bakers% or 15g',
                    'Sugar 16 Bakers% or 15g',
                    'Shortening 4 Bakers% or 40g',
                    'Bread Improver 0.4 Bakers% or 4g'
                ]),
                'procedure' => json_encode([
                    'To make the sponge: In a small bowl, combine Montana Hard Flour and instant yeast. In the bowl of the mixer with the spiral attachment, mix the blended flour and yeast with water. Knead on speed 1 to combine. Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and set aside to ferment for 3 hours.',
                    'To make the dough: In a small bowl, combine Montana Hard Flour, instant yeast, bread improver and skim milk powder and set aside. In separate bowl, dissolve salt and sugar in water. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and mix with the spiral attachment and add the sponge gradually and the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes.',
                    'Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes',
                    'While resting, grease the loaf bread molder ',
                    'Divide the dough into 700 grams, round, sheet and shape it into a log. Place it in a lightly greased 15”x4.0”x3.5” loaf pan.',
                    'Cover the pan, and let the dough rise for 1 hour and 30 minutes, till it’s 1” under the rim of the pan. Towards the end of the rising time, preheat the oven to 150˚C.',
                    'Bake the bread for 35 to 45 minutes',
                    'Remove the bread from the oven, and turn it out onto a rack to cool. When completely cool, wrap in plastic and store at room temperature.',
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '2',
                'category_id' => '2',
                'featured' => 'http://206.189.33.253/storage/features/whole_wheat_o.jpg',
                'title' => 'Whole Wheat Bread',
                'sponge' => json_encode([
                    'Montana Spring Hard Flour 70 Bakers% or 700g',
                    'Instant Yeast 1.5 Bakers% or 15g',
                    'Water 60 Bakers% or 420g',
                ]),
                'dough' => json_encode([
                    'Whole Wheat Flour 30 Bakers% or 300g',
                    'Water 48 Bakers% or 60g',
                    'Salt 1.5 Bakers% or 15g',
                    'Brown Sugar 8 Bakers% or 80g',
                    'Honey 6 Bakers% or 60g',
                    'Shortening 4 Bakers% or 40g',
                    'Milk Powder 4 Bakers% or 40g',
                    'Molasses 2 Bakers% or 20g',
                    'Improver 0.4 Bakers% or 4g'
                ]),
                'procedure' => json_encode([
                    'To make the sponge: In a small bowl, combine Montana Hard Flour and instant yeast. In the bowl of the mixer with the spiral attachment, mix the blended flour and yeast with water. Knead on speed 1 to combine. Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and set aside to ferment for 3 hours.',
                    'To make the dough: In a small bowl, combine Best Quality Whole Wheat Flour, bread improver and skim milk powder and set aside. In separate bowl, dissolve brown sugar and salt in water and add the molasses and honey. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution with molasses and honey then mix with the spiral attachment and add the sponge gradually and the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 8 to 10 minutes.',
                    'Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes',
                    'While resting, grease the loaf bread molder',
                    'Divide the dough into 550 grams, round, sheet and shape it into a log. Place it in a lightly greased 12”x3.5”x3” loaf pan and brush it with egg wash then sprinkle it with oatmeal.',
                    'Let the dough rise for 1 hour and 30 minutes. Towards the end of the rising time, preheat the oven to 150˚C.',
                    'Bake the bread for 35 to 45 minutes.',
                    'Remove the bread from the oven, and turn it out onto a rack to cool. When completely cool, wrap in plastic and store at room temperature.',
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '3',
                'category_id' => '2',
                'featured' => 'http://206.189.33.253/storage/features/french_bread_o.jpg',
                'title' => 'French Bread',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Montana Spring Hard Flour 100 Bakers% or 1000g',
                    'Water 57 Bakers% or 570g',
                    'Instant Yeast, Low Sugar 1.0 Bakers% or 10g',
                    'White Sugar 1.0 Bakers% or 10g',
                    'Salt 2.0 Bakers% or 20g',
                    'Improver 0.6 Bakers% or 6g',
                ]),
                'procedure' => json_encode([
                    'In a small bowl, combine Montana Hard Flour, instant yeast, and bread improver and set aside. In separate bowl, dissolve salt and sugar in water. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and mix with the spiral attachment and the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes.',
                    'Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and allow to ferment for 1 hour.',
                    'While fermenting, grease the French bread molder ',
                    'Divide the dough into 300 grams, pre-mold the dough, allows to rest for 15 minutes. ',
                    'Sheet and shape it into a log. Place it in a lightly greased french bread molder.',
                    'Let the dough rise for 1 hour and 30 minutes. Towards the end of the rising time, preheat the oven to 200˚C.',
                    'Bake the bread for 20 to 25 minutes with steam for the first 10 seconds of baking.',
                    'Remove the bread from the oven, and turn it out onto a rack to cool. When completely cool, wrap in plastic and store at room temperature.',
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '4',
                'category_id' => '2',
                'featured' => 'http://206.189.33.253/storage/features/burger_o.jpg',
                'title' => 'Burger Buns',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Montana Spring Hard Flour 100 Bakers% or 1000g',
                    'Water 50 Bakers% or 500g',
                    'Instant Yeast 1 Bakers% or 10g',
                    'Sugar 15 Bakers% or 150g',
                    'Salt 1.5 Bakers% or 15g',
                    'Milk Powder 4 Bakers% or 40g',
                    'Bread Improvers 0.4 Bakers% or 4g',
                    'Shortening 8 Bakers% or 80g'
                ]),
                'procedure' => json_encode([
                    'In a small bowl, combine Montana Hard Flour, instant yeast, bread improver and milk powder and set aside. In separate bowl, dissolve salt and sugar in water. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and mix with the spiral attachment and the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes.',
                    'Place the kneaded dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes',
                    'While resting, grease the burger buns molder.',
                    'Divide the dough into 50 grams, round. Place it in a lightly greased burger bun molder.',
                    'Cover the pan, and let the dough rise for 1 hour. Towards the end of the rising time, preheat the oven to 170˚C.',
                    'Bake the bread for 12 to 15 minutes.',
                    'Remove the bread from the oven, and turn it out onto a rack to cool. When completely cool, wrap in plastic and store at room temperature.',
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
