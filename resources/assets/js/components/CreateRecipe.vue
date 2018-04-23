<template>
<div>

    <div class="row mb-3">
        <div class="col">
                <span class="display-4">Add Recipe</span>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

    <div class="row">
        <div class="col-6">
                
            <div class="card-dashed">
                <input type="file" ref="path" @change="onFileSelected" class="input-file">
                <h4 class="text-center">
                    <span data-feather="upload" class="text-muted mx-auto d-block" style="height: 100px; width: auto; margin-top: 200px;"></span>
                    Select video to upload
                </h4>
                <h5 class="font-weight-normal text-muted text-center">Or drag and drop a video file</h5>
            </div>

        </div>

        <div class="col-6">
                <span class="h5 font-weight-bold text-uppercase" v-show="progress != 100">Uploading {{ progress }}%</span>
                <span class="h5 font-weight-bold text-uppercase" v-show="progress == 100">Complete {{ progress }}%</span>

                <div class="progress mb-3 mt-3 rounded-0">
                    <div class="progress-bar progress-bar-striped" :class="{'progress-bar-animated' : progress != 100}" role="progressbar" aria-valuemin="0" aria-valuemax="100" :style="'width: ' + progress + '%'"></div>
                </div>

                <form enctype="multipart\form-data" @submit.prevent="submitRecipe()">

                    <div class="form-group">
                        <label>Recipe Name</label>
                        <input type="file" class="form-control" ref="featured" @change="onFeaturedSelected" placeholder="Featured Recipe">
                    </div>

                    <div class="form-group">
                        <label>Recipe Name</label>
                        <input type="text" v-validate:recipe.title="'required|alpha_spaces'" class="form-control form-control-lg" v-model="recipe.title" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label>Categories</label>
                        <select name="category_list" class="form-control form-control-lg" v-model="recipe.category_list" placeholder="Select a category">
                            <option value="1">Flour</option>
                            <option value="2">Cakes</option>
                        </select>
                    </div>

                    <div class="form-group is-invalid">
                        <label>Description</label>
                        <textarea class="form-control" v-model="recipe.description" placeholder="Add Short Description" rows="3"></textarea>
                    </div>


                    <button type="submit" class="float-right btn btn-primary btn-lg" :class="{ 'not-allowed' : progress != 100 }" :disabled="progress != 100">
                        Submit
                    </button>

                </form>

            </div>
    </div><!-- end row -->

       

        </div>
         <div class="card-footer text-center">
            <a href="#" class="btn btn-link btn-lg">
                Submit <span data-feather="arrow-right"></span>
            </a>
        </div>
    </div>





</div>
</template>
<script>
import VideoRecipe from './VideoRecipe.vue';
import VeeValidate from 'vee-validate';

export default {

    components: {
        appVideoRecipe: VideoRecipe,
        VeeValidate
    },

    data() {
        return {
            path: '',
            uploading: false,
            progress: 0,
            recipe: {
                'title': '',
                'featured': '',
                'description': '',
                'category_list': ''
            },
            errors: {}
        }
    },


    methods: {        
        onFileSelected() {
            this.path = this.$refs.path.files[0];
            this.uploading = true;
            this.onUpload();
        },

        onUpload() {
            let formData = new FormData();
            formData.append('path', this.path);

            axios.post('/videos/store', 
                formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
                onUploadProgress: uploadEvent => {
                    this.progress = Math.round(uploadEvent.loaded / uploadEvent.total * 100);
                }
            })
            .then(function(){
                console.log('SUCCESS!!');
            })
            .catch(function(){
                console.log('FAILURE!!');
            });
        },

        onFeaturedSelected(){
             this.recipe.featured = this.$refs.featured.files[0];
        },

        submitRecipe() {
            this.onFeaturedSelected();
            let formRecipe = new FormData();

            formRecipe.append('featured', this.recipe.featured);
            formRecipe.append('title', this.recipe.title);
            formRecipe.append('description', this.recipe.description);
            formRecipe.append('category_list', this.recipe.category_list);

            axios.post('/recipes', formRecipe)
            .then(response => alert('Success'))
            .catch(function() {
                console.log('ERROR!');
            });
        }
    }
  
}
</script>
<style scoped>
   .not-allowed {
       cursor: not-allowed;
    }
</style>
