<template>
    <div class="sec-product bg0 p-t-145 p-b-25">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-48">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    Vente à la Ferme
                    <div class="how-pos1">
                        <img src="assets/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>
                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Nos produits
                </h3>
            </div>
            <div class="row isotope-grid">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill" v-for='article in articles'>
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-140">
                            <img v-bind:src="article.image" :alt="article.alt">
                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{article.name}}
                                </a>
                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                    {{article.price}} €/{{article.conditionnement}}
                                </span>
                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a :href="article.route" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="assets/images/icons/icon-view.png" alt="ICON">
                                    </a>
                                    <button @click="ajouter(article.id)" class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="assets/images/icons/icon-cart.png" alt="ICON">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-c-m">
                <a href="./magasin">
                    <button class="flex-c-m txt-s-105 cl0 bg10 size-a-43 hov-btn2 trans-04 p-rl-10">
                        Voir tous les produits
                    </button>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props:['gridarticles'],
    data(){
        return {
            articles: JSON.parse(this.gridarticles)
        }
    },
    methods: {
         ajouter(id) {
             var panier = [];
            $.ajax({
                type:'POST',
                url:'ajaxRequestPost/'+id,
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