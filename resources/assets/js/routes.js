import Recipes from './components/recipes/Recipes.vue';
import RecipeDetail from './components/recipes/RecipeDetail.vue'

export const routes = [
 { path: '/recipes', component: Recipe  },
 { path: '/recipes/detail', component: RecipeDetail }
];