<template>
<!-- Related product -->
<section class="sec-related bg0 p-b-85 p-t-50">
    <div class="container">
        <!-- slide9 -->
        <div class="wrap-slick9">
            <div class="flex-w flex-sb-m p-b-33 p-rl-15">
                <h3 class="txt-l-112 cl3 m-r-20 respon1 p-tb-15">
                    Les autres Produits
                </h3>
                <div class="wrap-arrow-slick9 flex-w m-t-6"></div>
            </div>
            <div class="slick9">
                <!-- - -->
                <div class="item-slick9 p-all-15" v-for='article in articles'>
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-140">
                            <img :src="article.image" :alt="article.alt">
                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{article.name}}
                                </a>
                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    {{article.price}} €/{{article.conditionnement}}
                                </span>
                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a :href="article.route" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="/assets/images/icons/icon-view.png" alt="ICON">
                                    </a>
                                    <button @click="ajouter(article.id)" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="/assets/images/icons/icon-cart.png" alt="ICON">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props:['initminigrid'],
    data(){
        return {
            articles: JSON.parse(this.initminigrid)
        }
    },
    methods: {
         ajouter(id) {
             var panier = [];
            $.ajax({
                type:'POST',
                url:'/ajaxRequestPost/'+id,
                data:{ id },
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(response){ // What to do if we succeed
                    panier = response.data;
                    Bus.$emit('update', panier);
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        }
    }
}
</script>