<template>
<div>
    <div class="row p-b-30" v-for="article in articles">
        <div class="col-sm-5 col-md-4 col-lg-3">
            <a :href="article.route" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
                <img :src="article.image" :alt="article.alt">
            </a>
        </div>
        <div class="col-sm-7 col-md-8 col-lg-9">
            <div class="p-t-5 p-b-20">
                <div class="flex-w flex-sb-m">
                    <a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
                        {{article.name}}
                    </a>
                </div>
                <span class="txt-m-117 cl9">
                    {{article.price}} €/{{artcile.conditionnement}}
                </span>
                <p class="txt-s-101 cl6 p-t-18">
                    {{article.desc}}
                </p>
                <div class="flex-w p-t-29" v-if='article.dispo == "yes"'>
                    <button @click="ajouter(article.id)" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                        Ajouter au panier
                    </button>
                </div>
                <div class="flex-w p-t-29" v-else>
                    <button  class="flex-c-m txt-s-103 cl0 bg16 size-a-2 hov-btn2 trans-04">
                        Indisponible
                    </button>
                </div>	
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['initarticles'],
    data(){
        return {
            articles: JSON.parse(this.initarticles)
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
    },
}
</script>