<?php

use Illuminate\Database\Seeder;

class RecipeUpdate0506TableSeeder extends Seeder
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
                'video_id' => '5',
                'category_id' => '1',
                'featured' => 'http://206.189.33.253/storage/features/brownies_o.jpg',
                'title' => 'Brownies',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Family All Purpose Flour 100 Bakers% | 300g',
                    'Cocoa Powder 33.33 Bakers% | 100g',
                    'Baking Powder 1.0 Bakers% | 3g',
                    'Brown Sugar 133.3 Bakers% | 400g',
                    'White Sugar 83,3 Bakers% | 250g',
                    'Eggs 100 Bakers% | 300g',
                    'Butter 50 Bakers% | 150g',
                    'Margarine 25 Bakers% | 75g',
                    'Glucose 20 Bakers% | 60g'
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 160˚ C. Lightly grease a jelly roll pan 12”x16” pan or line a wax paper.',
                    'Sift together the Family All Purpose Flour, cocoa powder, baking powder. Set the mixture aside.',
                    'In a mixing bowl, beat the butter and margarine.',
                    'Add the white sugar and brown sugar mix until well combined.',
                    'Add the eggs one at a time mix until light and fluffy.',
                    'Add the flour mixture, mix until well combined.',
                    'Add the glucose, mix until well combined.',
                    'Spread the batter on the paper lined jelly roll pan, using the spatula or dough scraper to spread.',
                    'Bake the brownie for 35 to 40 minutes, until a toothpick inserted into the center comes out clean. Remove them from the oven and set them on a rack to cool completely.',
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '6',
                'category_id' => '4',
                'featured' => 'http://206.189.33.253/storage/features/red_velvet_o.jpg',
                'title' => 'Red Velvet Cake',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Snow silk cake flour 100 Bakers% | 250g',
                    'Baking powder 2 Bakers% | 5g',
                    'Salt 1.2 Bakers% | 3g',
                    'Cocoa powder 8 Bakers% | 20g',
                    'Unsalted butter 58 Bakers% | 114g',
                    'White sugar 120 Bakers% | 300g',
                    'Whole Eggs 60 Bakers% | 150g',
                    'Vanilla 1.6 Bakers% | 4g',
                    'Fresh milk 96 Bakers% | 240g',
                    'Red food color 6 Bakers% | 15g',
                    'Vinegar 2 Bakers% | 5g',
                    'Baking soda 2 Bakers% | 5g'
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 375˚F. Line the bottom of 8” pan with round wax paper.',
                    'Sift together the Snow Silk Cake Flour, cocoa powder, baking soda, salt, baking powder. Set the mixture aside.',
                    'In a mixing bowl, beat the butter.',
                    'Add the white sugar and mix until well combined.',
                    'Add the eggs one at a time and add vanilla and vinegar mix until light and fluffy.',
                    'Beat in the flour mixture alternately with fresh milk, beginning and ending with the flour. The point is to keep the mixture smooth, which is more easily accomplished if you add in portions.',
                    'Add the red food color until well combined.',
                    'Spread the batter on the round pan, using the spatula or dough scraper.',
                    'Bake the cake for 20 to 25 minutes, until a toothpick inserted into the center comes out clean.',
                    'Remove them from the oven and set them on a rack to cool completely.'
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '7',
                'category_id' => '3',
                'featured' => 'http://206.189.33.253/storage/features/peanutbutter_cookie_o.jpg',
                'title' => 'Peanut Butter Cookies',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Goldkey soft flour 100 Bakers% | 500g',
                    'Butter 64 Bakers% | 320g',
                    'White sugar 61 Bakers% | 305g',
                    'Brown sugar 58 Bakers% | 209g',
                    'Peanut butter 70 Bakers% | 350g',
                    'Egg 28 Bakers% | 140g',
                    'Baking soda 1.8 Bakers% | 9g',
                    'Baking powser 1.1 Bakers% | 5.5g',
                    'Salt 0.6 Bakers% | 3g'
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 170˚C. Lightly grease (or line with wax paper) baking sheets.',
                    'Sift together the Goldkey Soft Flour, baking powder, baking soda. Set the mixture aside.',
                    'In a mixing bowl, beat the butter.',
                    'Add the brown sugar, white sugar, salt and mix until well combined.',
                    'Add the eggs one at a time mix until light and fluffy.',
                    'Beat in the flour mixture.',
                    'Add the peanut butter until well combined.',
                    'Drop the cookie dough using ice cream scooper onto the prepared baking sheet, leaving 2” between them.',
                    'Bake the cookies for 10 to 15 minutes, until they’re barely beginning to brown around the edges; tops won’t have browned. ',
                    'Remove them from the oven and set them on a rack to cool completely.'
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '8',
                'category_id' => '4',
                'featured' => 'http://206.189.33.253/storage/features/banana_cake_o.jpg',
                'title' => 'Banana Cake',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Snow silk cake flour 50 Bakers% | 120g',
                    'Montana spring hard flour 50 Bakers% | 120g',
                    'White sugar 62.50 Bakers% | 150g',
                    'Brown sugar 37.5 Bakers% | 90g',
                    'Eggs 50 Bakers% | 150g',
                    'Butter 50 Bakers% | 120g',
                    'Salt 0.8 Bakers% | 1.92g',
                    'Peeled banana 67.5 Bakers% | 160g',
                    'Baking powder 2.5 Bakers% | 6g',
                    'Baking soda 0.8 Bakers% | 2g',
                    'Water 31.2 Bakers% | 75g'
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 180˚C. Line the bottom of 8.5”x3”x2.0” loaf pan with wax paper.',
                    'Sift together the Snow Silk Cake Flour, Montana Spring Hard Flour, baking powder, baking soda. Set the mixture aside',
                    'In a mixing bowl, beat the butter, salt, brown sugar, and white sugar.',
                    'Add the eggs one at a time mix until light and fluffy.',
                    'Beat in the flour mixture.',
                    'Add the water and mashed banana until well combined.',
                    'Spread the batter on the loaf pan, using the spatula.',
                    'Top it with chopped cashew nuts.',
                    'Bake the cake for 25 to 30 minutes, until a toothpick inserted into the center comes out clean.',
                    'Remove them from the oven and set them on a rack to cool completely.'
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '9',
                'category_id' => '1',
                'featured' => 'http://206.189.33.253/storage/features/butterscotch_o.jpg',
                'title' => 'Butterscotch',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Whole eggs 50 Bakers% | 200g',
                    'Brown sugar 150 Bakers% | 600g',
                    'Vanilla as desired',
                    'Melted butter 55 Bakers% | 200g',
                    'Corn syrup 15 Bakers% | 60g',
                    'Family all purpose flour 100 Bakers% | 400g',
                    'Baking powder 3 Bakers% | 12g',
                    'Salt 1 Bakers% | 4g',
                    'Cashew nuts, chopped 56 Bakers% | 260g',
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 160˚ C. Lightly grease a jelly roll pan 12”x16” pan or line a wax paper.',
                    'Sift together the Family All Purpose Flour, and baking powder. Set the mixture aside.',
                    'In a mixing bowl, beat the brown sugar, salt, eggs and vanilla mix until well combined.',
                    'Add the flour mixture, mix until well combined.',
                    'Add the corn syrup melted butter, mix until well combined.',
                    'Fold in the chopped cashew nuts.',
                    'Spread the batter on the paper lined jelly roll pan, using the spatula or dough scraper to spread.',
                    'Top it with chopped cashew nuts.',
                    'Bake the butterscotch for 35 to 40 minutes, until a toothpick inserted into the center comes out clean. Remove them from the oven and set them on a rack to cool completely.'
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'video_id' => '10',
                'category_id' => '3',
                'featured' => 'http://206.189.33.253/storage/features/sugar_cookies_o.jpg',
                'title' => 'Sugar Cookie',
                'sponge' => json_encode([
                    'empty'
                ]),
                'dough' => json_encode([
                    'Goldkey soft flour 100 Bakers% | 500g',
                    'Salt 0.4 Bakers% | 2g',
                    'Baking soda 1 Bakers% | 5g',
                    'Unsalted butter 28 Bakers% | 140g',
                    'Powdered Sugar 58 Bakers% | 290g',
                    'Eggs 6.8 Bakers% | 34g',
                    'Vanilla 1 Bakers% | 5g'
                ]),
                'procedure' => json_encode([
                    'Preheat the oven to 180˚C. Line with wax paper baking sheets.',
                    'Sift together the Goldkey Soft Flour, baking soda. Set the mixture aside.',
                    'In a mixing bowl, beat the butter, and salt',
                    'Add the powdered sugar',
                    'Add the eggs one at a time and vanilla mix until light and fluffy.',
                    'Beat in the flour mixture until well combined.',
                    'Sprinkle your rolling surface with flour and flour your rolling pin. Roll it 1/4 “thick. Use a cookie cutter to cut shape. Re-roll and cut the dough scraps. Place the cookies on lined baking sheets.',
                    'Bake the cookies for 10 to 12 minutes, until they’re set and barely brown around the edges.',
                    'Remove them from the oven and cool right on the pan or lift the cookies and wax paper off the pan.'
                ]),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
         ]);
    }
}
