<?php

use Illuminate\Database\Seeder;

class UpdatedRecipeProcedureSeeder extends Seeder
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
                'procedure' => json_encode([
                    'To make the sponge:  In a small bowl, combine Montana Hard Flour and instant yeast.  Using a mixer with the hook attachment, blend the flour and yeast mixture with water.  Knead on speed 1 to combine.  Place the dough in a lightly greased bowl, cover with plastic wrap and set aside to ferment for 2-3 hours.',
                    'To make the dough: In a small bowl, combine Montana Hard Flour, instant yeast, bread improver and skim milk powder and set aside. In a separate bowl, dissolve salt and sugar in water.  In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and start mixing with the hook attachment.   Gradually add the sponge in pieces.   Lastly, add the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes.',
                    'Place the dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes',
                    'While resting, grease the 15”x4.0”x3.5” loaf pans.',
                    'Divide the dough into 700 gram pieces.   Round, sheet and shape them up into logs.  Place them in the loaf pans.',
                    'Cover the pans, and let the dough rise for 1 hour and 30 minutes, till the loaves are 1” under the rim of the pan. Towards the end of the rising time, preheat the oven to 150˚C.',
                    'Bake the loaf bread for 35 to 45 minutes.',
                    'Remove the loaf bread from the oven, and turn them out onto a rack to cool down. When completely cool, wrap them in plastic and store at room temperature.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',2)
            ->update([
                'procedure' => json_encode([
                    'To make the sponge: In a small bowl, combine Montana Hard Flour and instant yeast. Using a mixer with the hook attachment, blend the flour and yeast mixture with water. Knead on speed 1 to combine. Place the dough in a lightly greased bowl, cover with plastic wrap and set aside to ferment for 2-3 hours.',
                    'To make the dough: In a small bowl, combine Best Quality Whole Wheat Flour, bread improver and skim milk powder and set aside. In separate bowl, dissolve brown sugar and salt in water.  Add the molasses and honey. In the bowl of the mixer, place the combined dry ingredients and the liquid ingredients and start mixing with the hook attachment.   Gradually add the sponge in pieces.  Lastly, add the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 8 to 10 minutes.',
                    'Place the dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes.',
                    'While resting, grease the 12”x3.5”x3” loaf pans.',
                    'Divide the dough into 550 gram pieces.  Round, sheet and shape them into logs. Place them in the loaf pans.  Brush it with egg wash and then sprinkle with oatmeal.',
                    'Let the dough rise for 1 hour and 30 minutes. Towards the end of the rising time, preheat the oven to 150˚C.',
                    'Bake the bread for 35 to 45 minutes.',
                    'Remove the bread from the oven, and turn them out onto a rack to cool down. When completely cool, wrap them in plastic and store at room temperature.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',3)
            ->update([
                'procedure' => json_encode([
                    'In a small bowl, combine Montana Hard Flour, instant yeast, bread improver and set aside. In separate bowl, dissolve salt and sugar in water. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and start mixing with the hook attachment.  Lastly, add the shortening and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes.',
                    'Place the dough in a lightly greased bowl, cover with plastic wrap and allow to ferment for 1 hour.',
                    'While fermenting, grease the French bread molder.',
                    'Divide the dough into 300 gram pieces.  Pre-shape the dough and allow to rest for 15 minutes.',
                    'Sheet and shape them up into baguette logs. Place them on the French bread molder.',
                    'Let the dough rise for 1 hour and 30 minutes. Towards the end of the rising time, preheat the oven to 200˚C.',
                    'Bake the bread for 20 to 25 minutes with steam for the first 10 seconds of baking.',
                    'Remove the bread from the oven, and turn them out onto a rack to cool down. When completely cool, wrap in plastic and store at room temperature.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',4)
            ->update([
                'procedure' => json_encode([
                    'In a small bowl, combine Montana Hard Flour, instant yeast, bread improver and milk powder and set aside. In separate bowl, dissolve salt and sugar in water. In the bowl of the mixer, place the combined dry ingredients and the sugar and salt solution and start mixing with the hook attachment.  Lastly, add the shortening to combine and knead on speed 2 until the dough is smooth and elastic, about 10 to 12 minutes',
                    'Place the dough in a lightly greased bowl, cover with plastic wrap and allow to rest for 10 minutes.',
                    'While resting, grease the burger bun trays.',
                    'Divide the dough into 50 gram pieces.   Round up and place them on the burger bun trays.',
                    'Cover the trays and let the dough rise for 1 hour. Towards the end of the rising time, preheat the oven to 170˚C.',
                    'Bake the bread for 12 to 15 minutes.',
                    'Remove the bread from the oven, and turn them out onto a rack to cool down. When completely cool, wrap in plastic and store at room temperature.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',5)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 160˚ C. Lightly grease a 12”x16” jelly roll pan or line with wax paper.',
                    'Sift together the Family All Purpose Flour, cocoa powder, baking powder. Set the mixture aside.',
                    'In a mixing bowl, cream the butter and margarine with the white sugar, brown sugar and glucose.',
                    'Add the eggs one at a time.  Mix until all eggs have been incorporated.',
                    'Add the flour mixture and mix until well-combined.',
                    'Using a spatula or a dough scraper, spread the batter onto the jelly roll pan.',
                    'Bake the brownies for 35 to 40 minutes, or until a toothpick inserted into the center comes out clean.  Remove brownies from the oven and set them on a rack to cool completely.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',6)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 180˚C or 375˚F.  Line the bottom of an 8” pan with round wax paper.',
                    'Sift together Snow Silk Cake Flour, cocoa powder, baking soda, salt, and baking powder. Set the mixture aside.',
                    'In a mixing bowl, cream the butter with white sugar.',
                    'Add the eggs one at a time and add vanilla and vinegar mix until light and fluffy.',
                    'Mix in the flour mixture alternately with fresh milk, beginning and ending with the flour. The point is to keep the mixture smooth, which is more easily accomplished if you add in portions.',
                    'Add the red food color until well combined.',
                    'Spread the batter on the round pan, using a spatula or dough scraper.',
                    'Bake the cake for 20 to 25 minutes, until a toothpick inserted into the center comes out clean.',
                    'Remove them from the oven and set aside on a rack to cool completely.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',7)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 170˚C.  Lightly grease your baking sheets (or line with wax paper).',
                    'Sift together the Goldkey Soft Flour, baking powder and baking soda. Set the mixture aside.',
                    'In a mixing bowl, cream the butter with brown sugar, white sugar, and salt.',
                    'Add the eggs one at a time mix until light and fluffy.',
                    'Beat in the flour mixture.',
                    'Add the peanut butter until well combined.',
                    'Drop the cookie dough pieces using an ice cream scooper onto the prepared baking sheet, leaving 2” between them.',
                    'Bake the cookies for 10 to 15 minutes, or until they are golden brown.',
                    'Remove cookies from the oven and set them on a rack to cool completely.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',8)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 180˚C. Line the bottom of 8.5”x3”x2.0” loaf pan with wax paper.',
                    'Sift together Snow Silk Cake Flour, Montana Spring Hard Flour, baking powder and baking soda. Set the mixture aside.',
                    'In a mixing bowl, cream the butter, salt, brown sugar, and white sugar.',
                    'Add the eggs one at a time mix until light and fluffy.',
                    'Beat in the flour mixture.',
                    'Add the water and mashed bananas until well combined.',
                    'Spread the batter on the loaf pan, using the spatula.',
                    'Top it with chopped cashew nuts if desired.',
                    'Bake the cake for 25 to 30 minutes, or until a toothpick inserted into the center comes out clean.',
                    'Remove them from the oven and set them on a rack to cool completely.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',9)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 160˚ C. Lightly grease a 12”x16” jelly roll pan or line with wax paper.',
                    'Sift together Family All Purpose Flour and baking powder.  Add the salt and set the mixture aside.',
                    'In a mixing bowl, beat the eggs, brown sugar, and vanilla and mix until well combined.',
                    'Add in the flour mixture.',
                    'Add the melted butter and corn syrup.  Mix until well combined.',
                    'Fold in the chopped cashew nuts, setting some aside to sprinkle on top.',
                    'Using a spatula or dough scraper, spread the batter onto the jelly roll pan.',
                    'Top with chopped cashew nuts.',
                    'Bake the butterscotch for 35 to 40 minutes, or until a toothpick inserted into the center comes out clean. Remove butterscotch from the oven and set on a rack to cool completely.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('recipes')
            ->where('id',10)
            ->update([
                'procedure' => json_encode([
                    'Preheat the oven to 180˚C. Line with wax paper baking sheets.',
                    'Sift together Goldkey Soft Flour and baking soda. Set the mixture aside.',
                    'In a mixing bowl, beat the butter, powdered sugar and salt.',
                    'Add the eggs one at a time until just combined. Then add in the vanilla.',
                    'Beat in the flour mixture until well combined.  Wrap well and chill and rest for 15-30 minutes.',
                    'Sprinkle your rolling surface with flour.  Roll dough to ¼” thick, making sure it does not stick to your work surface as you roll out.   Use a cookie cutter to cut shape as desired.  You may re-roll the dough scraps.  Place the cookies on lined baking sheets.',
                    'Bake the cookies for 10 to 12 minutes, or until barely brown around the edges.',
                    'Remove cookies from the oven and let them cool down before consuming.'
                ]),
                'updated_at' => Carbon\Carbon::now(),
            ]);






    }
}
