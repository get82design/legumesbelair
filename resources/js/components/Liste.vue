<template>
<div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-30" v-for='article in articles'>
        <div class="block1">
            <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-140">
                <img v-bind:src="article.image" v-bind:alt="article.alt">
                <div class="block1-content flex-col-c-m p-b-46">
                    <div class="flex-c-m m-tb-10" style="width:100%;">
                        <img v-if='article.dispo == "yes"' src="assets/images/produits/disponible.png">
                        <img v-if='article.dispo == "no"' src="assets/images/produits/indisponible.png">
                    </div>
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
                        <button @click="ajouter(article.id)" class="block1-icon flex-c-m wrap-pic-max-w" v-if='article.dispo == "yes"'>
                            <img src="assets/images/icons/icon-cart.png" alt="ICON">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import Bus from './../Bus.js'
export default {
    props:['initarticles'],
    data(){
        return {
            articles: JSON.parse(this.initarticles)
        }
    },
    methods: {
         ajouter(id) {
             var panier = [];

            // $.ajax({
            //     type:'GET',
            //     async: false,
            //     url:'ajaxRequestGetId/'+id,
            //     beforeSend: function (xhr) {
            //         var token = $('meta[name="csrf-token"]').attr('content')

            //         if (token) {
            //             return xhr.setRequestHeader('X-CSRF-TOKEN', token)
            //         }
            //     },
            //     // data : {id:idprod},
            //     success: function(response){ // What to do if we succeed
            //         console.log(response)
            //         produit = response.data
            //         console.log(produit)
            //     },
            //     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            //         console.log(JSON.stringify(jqXHR));
            //         console.log("AJAX error: " + textStatus + ' : ' + errorThrown)
            //     }
            // });
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
    },
}
</script>