<template>
     <div class="product-essential col-md-12">
        
        <div class="product-img-box col-md-6">
            <!-- <div class="container"> -->

                <!-- Gallery -->
                <div id="js-gallery" class="gallery" style="height: auto;">

                    <!--Gallery Hero-->
                    <div class="gallery__hero">
                        <img :src="productImage">
                    </div>
                    <!--Gallery Hero-->

                    <!--Gallery Thumbs-->
                    <div class="gallery__thumbs">
                        <a v-for="(image, index) in images"  :key="'image-' + index"
                        :class="index == 0 ? 'is-active' : ''"
                        :id="index"
                        :href="'/storage/products/thumbnail/'+image.productImages" data-gallery="thumb"
                        @click.prevent="changeImage(image.productImages, index)"
                        >
                        <img :src="'/storage/products/thumbnail/'+image.productImages">
                        </a>
                       
                    </div>
                    <!--Gallery Thumbs-->

                </div><!--.gallery-->
                <!-- Gallery -->
            
            <!-- </div> -->
        </div>

       
        <div class="product-shop col-md-6">
            <div class="product-name">
                <h1>{{ product.name }}</h1>
            </div>
            <div class="meta-box">
                <div class="price-box">	
                   
                    <span class="special-price">Unit Price: 
                        <span v-if="hasAuthUser">{{ totalprice }}</span>
                        <span v-else><a href="/login">Login to see price</a></span>
                    </span>
                    <span class="special-price">Total Price:  
                        <span v-if="hasAuthUser">{{ totalprice * quantity }}</span>
                        <span v-else><a href="/login">Login to see price</a></span>
                    </span>
                    
                </div>
                <div class="rating-box">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tags-list">
                <label>Availability</label><span>:</span>
                <ul>
                    
                    <div v-if="product">
                        <li v-if="product.availability == 0"><a >Available</a></li>
                        <li v-else-if="product.availability == 1"><a >Not Available</a></li>
                        <li v-else-if="product.availability == 2"><a >Pre Order</a></li>
                    </div>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- <div class="short-description">
            <span v-html="product.description"></span>
            </div> -->
            <div class="add-to-box">
                <div class="row">
                    <div class="add-to-cart col-md-8">
                        <input type="text" class="input-text qty-1" title="Qty"
                            v-model.number="quantity" 
                             @change.prevent="quantityChange"
                            @keydown.enter.prevent="quantityChange"
                            maxlength="12"
                            id="qty" name="qty">
                        <span class="increase-qty" @click="increaseQty()"><i class="fa fa-sort-up"></i></span>
                        <span class="decrease-qty" @click="decreaseQty()"><i class="fa fa-sort-down"></i></span>
                    </div>
                    <!-- <div class="add-to-cart">
                        <select>
                            <option value="1">Black</option>
                            <option value="2">Green</option>
                            <option value="3">Red</option>
                            <option value="4">Yellow</option>
                        </select>
                        
                    </div> -->
                    <div class="col-md-8">
                        <template v-if="colors.length > 0"  >
                            <label for="color">Color</label>
                            <select class="state"
                                v-model="prodcolor"
                                @change="colorChange"
                                name="color"
                            >
                                <option 
                                    v-for="(color, index) in colors" 
                                    :value="color" 
                                    :key="'color' + index"
                                >
                                    {{ color.color_name }}
                                </option>
                            </select>
                        </template>
                        <template v-for="(type, index) in types"  >
                            <label :key="'typenane' + index" for="type">{{ type.name }}</label>
                            <select class="state" :key="'type' + index"
                                v-model="prodtypes[index]"
                                @change="typeChange"
                                name="type"
                            >
                                <option 
                                    v-for="(variant, index) in type.variants" 
                                    :value="variant" 
                                    :key="'variant' + index"
                                >
                                    {{ variant.name }}
                                </option>
                            </select>
                        </template>

                        <template v-if="haslogo == 1"  >
                            <label for="img" class="col-form-label ">Upload custom logo!</label>
                           <div class="form-group  ">
                                    <input type="file" class="custom-file-input"
                                    @change="UploadFile"
                                    >
                            </div>
                        </template>
                    </div>
                </div>

                <button v-if="hasAuthUser" class="button btn-cart" title="Add to Cart" type="button" @click="saveBatch">
                    <em class="fa-icon"><i class="fa fa-shopping-cart"></i></em>
                    <span>Add Cart</span>
                </button>
                <button v-else class="button btn-cart" @click="redirectToLogin">
                    <em class="fa-icon"><i class="fa fa-shopping-cart"></i></em>
                    <span>Add Cart</span>
                </button>
                <!-- <a class="link-wishlist"><i class="fa fa-heart"></i></a> -->
            </div>
            <div class="cat-list">
                <label>Categories</label><span>: </span>
                <ul>
                    <li v-for="(category, index) in categories" :key="'category' + index">
                        <a :href="'/products/'+category.id+'-'+ category.category_name">
                        {{ category.category_name }}</a>
                    </li>
                </ul>
            </div>
            
            <div class="tags-list">
                <label>Tags</label><span>:</span>
                <ul>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
            <div class="social-icon">
                <ul>
                    <li v-if="social_media.youtube"><a :href="social_media.youtube"><i class="fa fa-youtube"></i></a></li>
                    <li v-if="social_media.fb"><a :href="social_media.fb"><i class="fa fa-facebook"></i></a></li>
                    <li v-if="social_media.ig"><a :href="social_media.ig"><i class="fa fa-instagram"></i></a></li>
                    <li v-if="social_media.twitter"><a :href="social_media.twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'product',
        props: {
            product: {
                type: Object,
                default: null
            },
            prod_categories: {
                type: Array,
                default: []
            },
            types: {
                type: Array,
                default: []
            },
            colors: {
                type: Array,
                default: []
            },
            images: {
               type: Array,
                default: []
            },
            social_media: {
                type: Object,
                default: null
            },
            user: {
                type: Object,
                default: () => {
                    return null;
                }
            },
            
        },
        data() {
            return {
                prodcolor: null,
                prodtypes: [],
                categories: this.prod_categories,
                quantity: 1,
                prodId: null,
                price: 0,
                totalprice: 0,
                typesTotalPrice: 0,
                productImage: null,
                haslogo: 0,
                logoprice: 0,
                logofile: null,
            }
        },
        computed: {
          hasAuthUser() {
                if (! this.user) {
                    return false;
                }

                return Object.keys(this.user).length > 0;
            },
        },
        methods: {
          
            changeImage(image,index){
                this.productImage = '/storage/products/'+image;

                var prevThumb = document.querySelector('.is-active');
                prevThumb.classList.remove('is-active');
                var thumb = document.getElementById(index);
                thumb.classList.add('is-active');
                console.log(prevThumb);
                // Remove active class from thumbs
                // thumbs.each(function() {
                //     if( $(this).hasClass('is-active') ) {
                //     $(this).removeClass('is-active');
                //     }
                // });
            },
            initOrder() {
                if (this.product) {
                    this.prodId = this.product.id;
                    this.haslogo = this.product.haslogo;
                    this.logoprice = this.product.logoprice;
                    this.price = this.product.discount_price ? parseFloat(this.product.discount_price) : parseFloat(this.product.price);
                    this.prodcolor = this.colors[0];
                    this.productImage = '/storage/products/'+ this.images[0].productImages;
                    if (this.types.length > 0){
                        // this.typesTotalPrice = 0;
                        for (let i = 0; i < this.types.length; i++){
                            this.prodtypes.push(this.types[i].variants[0]);
                            
                        }
                    }
                }
            },
            UploadFile(e){
                var file = e.target.files[0];

                var formfile = new FormData();
                formfile.set('logofile', file);
                axios.post('/upload-logo', formfile)
                .then((response) => {
                    this.logofile = response.data;
                     this.$swal('Done','Your file has been successfully uploaded!', 'success');
                   
                })
                .catch((error) => {
                     this.$swal('Error!','Error happening during uploading your file!', 'error');
                }); 

            },
            recalculatePrice(){
                if (this.prodtypes.length > 0){
                    this.typesTotalPrice = 0;
                    for (let i = 0; i < this.prodtypes.length; i++){
                        this.typesTotalPrice += this.prodtypes[i].price;
                        
                    }
                }

                this.totalprice = this.price 
                    + (this.prodcolor ? this.prodcolor.price : 0)
                    + this.typesTotalPrice;

                return 
            },

            colorChange(event) {
                this.recalculatePrice();
            },
            typeChange(event) {
                this.recalculatePrice();
            },
            quantityChange(event){

            },
            increaseQty(){
                this.quantity += 1;
            },
            decreaseQty(){
                if (this.quantity > 1)
                    this.quantity -= 1;
            },
            saveBatch() {
               
               var formData = new FormData();

                formData.append('id', this.prodId);
                formData.append('quantity',this.quantity);
                formData.append('prodcolor', this.prodcolor ? JSON.stringify(this.prodcolor) : null);
                formData.append('prodtypes', this.prodtypes ? JSON.stringify(this.prodtypes) : null);
                formData.append('logofile', this.logofile ? this.logofile : null);
           
                axios.post('/add-to-cart', formData)
                .then((response) => {
                    // setTimeout(() => {
                    //     window.location.href = "/cart";
                    // }, 1000);
                })
                .catch((error) => {
                    self.issummaring = 0;
                    this.savingStatus = true;
                }); 

                // this.$store.dispatch('CustomProductConfigurator/saveBatch')
                //     .then((response) => {
                //         this.$notify({
                //             group: 'main',
                //             type: 'success',
                //             title: 'Custom Product Configurator',
                //             text: "Custom Product succesfully saved"
                //         });

                //         setTimeout(() => {
                //             window.location = response.request.responseURL
                //         }, 1500);
                //     })
                //     .catch(err => {
                //         this.$notify({
                //             group: 'main',
                //             type: 'error',
                //             title: 'Custom Product Configurator',
                //             text: 'Error Occurred'
                //         });
                //     });
            },
            redirectToLogin() {
                window.location.href = "/login";
            }
        },
        mounted() {
            this.initOrder();
            this.recalculatePrice();
        },
        created() {
            //=== Private Variables ===//
            var gallery = $('#js-gallery');

            //=== Gallery Object ===//
            var Gallery = {
                zoom: function(imgContainer, img) {
                var containerHeight = imgContainer.outerHeight(),
                src = img.attr('src');
                
                if ( src.indexOf('/products/normal/') != -1 ) {
                    // Set height of container
                    imgContainer.css( "height", containerHeight );
                    
                    // Switch hero image src with large version
                    img.attr('src', src.replace('/products/normal/', '/products/zoom/') );
                    
                    // Add zoomed class to gallery container
                    gallery.addClass('is-zoomed');
                    
                    // Enable image to be draggable
                    img.draggable({
                    drag: function( event, ui ) {
                        ui.position.left = Math.min( 100, ui.position.left );
                        ui.position.top = Math.min( 100, ui.position.top );
                    }
                    });
                } else {
                    // Ensure height of container fits image
                    imgContainer.css( "height", "auto" );
                    
                    // Switch hero image src with normal version
                    img.attr('src', src.replace('/products/zoom/', '/products/normal/') );
                    
                    // Remove zoomed class to gallery container
                    gallery.removeClass('is-zoomed');
                }
                },
                switch: function(trigger, imgContainer) {
                var src = trigger.attr('href'),
                thumbs = trigger.siblings(),
                        img = trigger.parent().prev().children();
                
                // Add active class to thumb
                trigger.addClass('is-active');
                
                // Remove active class from thumbs
                thumbs.each(function() {
                    if( $(this).hasClass('is-active') ) {
                    $(this).removeClass('is-active');
                    }
                });

                // Reset container if in zoom state
                if ( gallery.hasClass('is-zoomed') ) {
                    gallery.removeClass('is-zoomed');
                    imgContainer.css( "height", "auto" );
                }

                // Switch image source
                img.attr('src', src);
                }
            };
        }
    }
</script>
<style scoped>
/* img {
  max-width: 100%;
} */


/**
 * Helper Styles
 */
.ir {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
}
    /**
 * Gallery Styles
 * 1. Enable fluid images
 */
.gallery {
  overflow: hidden;
}

.gallery__hero {
  overflow: hidden;
  position: relative;
  padding: 2em;
  margin: 0 0 0.3333333333em;
  background: #fff;
}
.is-zoomed .gallery__hero {
  cursor: move;
}
.is-zoomed .gallery__hero img {
  max-width: none;
  position: absolute;
  z-index: 0;
  top: -50%;
  left: -50%;
}

.gallery__hero-enlarge {
  position: absolute;
  right: 0.5em;
  bottom: 0.5em;
  z-index: 1;
  width: 30px;
  height: 30px;
  opacity: 0.5;
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iNS4wIC0xMC4wIDEwMC4wIDEzNS4wIiBmaWxsPSIjMzRCZjQ5Ij48cGF0aCBkPSJNOTMuNTkzIDg2LjgxNkw3Ny4wNDUgNzAuMjY4YzUuNDEzLTYuODczIDguNjQyLTE1LjUyNiA4LjY0Mi0yNC45MTRDODUuNjg3IDIzLjEwNCA2Ny41OTMgNSA0NS4zNDMgNVM1IDIzLjEwNCA1IDQ1LjM1NGMwIDIyLjI0IDE4LjA5NCA0MC4zNDMgNDAuMzQzIDQwLjM0MyA5LjQgMCAxOC4wNjItMy4yNCAyNC45MjQtOC42NTNsMTYuNTUgMTYuNTZjLjkzNy45MjcgMi4xNjIgMS4zOTYgMy4zODggMS4zOTYgMS4yMjUgMCAyLjQ1LS40NyAzLjM5LTEuMzk2IDEuODc0LTEuODc1IDEuODc0LTQuOTEyLS4wMDItNi43ODh6bS00OC4yNS0xMC43MWMtMTYuOTU0IDAtMzAuNzUzLTEzLjc5OC0zMC43NTMtMzAuNzUyIDAtMTYuOTY0IDEzLjgtMzAuNzY0IDMwLjc1My0zMC43NjQgMTYuOTY0IDAgMzAuNzUzIDEzLjggMzAuNzUzIDMwLjc2NCAwIDE2Ljk1NC0xMy43ODggMzAuNzUzLTMwLjc1MyAzMC43NTN6TTYzLjAzMiA0NS4zNTRjMCAyLjM0NC0xLjkwNyA0LjI2Mi00LjI2MiA0LjI2MmgtOS4xNjR2OS4xNjRjMCAyLjM0NC0xLjkwNyA0LjI2Mi00LjI2MiA0LjI2Mi0yLjM1NSAwLTQuMjYyLTEuOTE4LTQuMjYyLTQuMjYydi05LjE2NGgtOS4xNjRjLTIuMzU1IDAtNC4yNjItMS45MTgtNC4yNjItNC4yNjIgMC0yLjM1NSAxLjkwNy00LjI2MiA0LjI2Mi00LjI2Mmg5LjE2NHYtOS4xNzVjMC0yLjM0NCAxLjkwNy00LjI2MiA0LjI2Mi00LjI2MiAyLjM1NSAwIDQuMjYyIDEuOTE4IDQuMjYyIDQuMjYydjkuMTc1aDkuMTY0YzIuMzU1IDAgNC4yNjIgMS45MDcgNC4yNjIgNC4yNjJ6Ii8+PC9zdmc+);
  background-repeat: no-repeat;
  transition: opacity 0.3s cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
.gallery__hero-enlarge:hover {
  opacity: 1;
}
.is-zoomed .gallery__hero-enlarge {
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iNS4wIC0xMC4wIDEwMC4wIDEzNS4wIiBmaWxsPSIjMzRCZjQ5Ij48cGF0aCBkPSJNOTMuNTkzIDg2LjgxNkw3Ny4wNDUgNzAuMjY4YzUuNDEzLTYuODczIDguNjQyLTE1LjUyNiA4LjY0Mi0yNC45MTRDODUuNjg3IDIzLjEwNCA2Ny41OTMgNSA0NS4zNDMgNVM1IDIzLjEwNCA1IDQ1LjM1NGMwIDIyLjI0IDE4LjA5NCA0MC4zNDMgNDAuMzQzIDQwLjM0MyA5LjQgMCAxOC4wNjItMy4yNCAyNC45MjQtOC42NTNsMTYuNTUgMTYuNTZjLjkzNy45MjcgMi4xNjIgMS4zOTYgMy4zODggMS4zOTYgMS4yMjUgMCAyLjQ1LS40NyAzLjM5LTEuMzk2IDEuODc0LTEuODc1IDEuODc0LTQuOTEyLS4wMDItNi43ODh6TTE0LjU5IDQ1LjM1NGMwLTE2Ljk2NCAxMy44LTMwLjc2NCAzMC43NTMtMzAuNzY0IDE2Ljk2NCAwIDMwLjc1MyAxMy44IDMwLjc1MyAzMC43NjQgMCAxNi45NTQtMTMuNzkgMzAuNzUzLTMwLjc1MyAzMC43NTMtMTYuOTUzIDAtMzAuNzUzLTEzLjgtMzAuNzUzLTMwLjc1M3pNNTguNzcyIDQ5LjYxSDMxLjkyYy0yLjM1NSAwLTQuMjYzLTEuOTA3LTQuMjYzLTQuMjZzMS45MDgtNC4yNjMgNC4yNjItNC4yNjNINTguNzdjMi4zNTQgMCA0LjI2MiAxLjkwOCA0LjI2MiA0LjI2MnMtMS45MSA0LjI2LTQuMjYyIDQuMjZ6Ii8+PC9zdmc+);
}

.gallery__thumbs {
  text-align: center;
  background: #333;
}
.gallery__thumbs a {
  display: inline-block;
  width: 20%;
  padding: 0.5em;
  opacity: 0.75;
  transition: opacity 0.3s cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
.gallery__thumbs a:hover {
  opacity: 1;
}
.gallery__thumbs a.is-active {
  opacity: 0.2;
}
</style>