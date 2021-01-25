<template>
    <div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
        <div class="icon-header-item flex-c-m trans-04 icon-header-noti" v-bind:data-notify="count">
            <img src="/assets/images/icons/icon-cart-2.png" alt="CART">
        </div>
        <div class="cart-header menu-click-child trans-04">
            <div class="bo-b-1 bocl15">
                <div class="size-h-2 js-pscroll m-r--15 p-r-15">
                    <div class="flex-w flex-str m-b-25" v-for="item in panier">
                        <div class="size-w-15 flex-w flex-t">
                            <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                <img :src="item.image" alt="PRODUCT">
                            </a>
                            <div class="size-w-17 flex-col-l">
                                <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                    {{item.article}}
                                </a>
                                <span class="txt-s-101 cl9">
                                    {{item.price}} €
                                </span>
                                <span class="txt-s-109 cl12">
                                    x{{item.qty}}
                                </span>
                            </div>
                        </div>
                        <div class="size-w-14 flex-b">
                            <button type="submit" class="lh-10 cart_quantity_delete">
                                <img src="/assets/images/icons/icon-close.png" alt="CLOSE">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-22 p-b-12">
                <span class="txt-m-103 cl3 p-r-20">
                    Total
                </span>
                <span class="txt-m-111 cl6">
                    {{Math.round(100*total)/100}} €
                </span>
            </div>
            <!-- <div class="flex-w flex-sb-m p-t-22 p-b-12">
                <span class="txt-m-103 cl3 p-r-20">
                    HT
                </span>
                <span class="txt-m-111 cl6">
                    {{Math.round(100*total)/100}} €
                </span>
            </div>
            <div class="flex-w flex-sb-m p-b-31">
                <span class="txt-m-103 cl3 p-r-20">
                    TTC
                </span>
                <span class="txt-m-111 cl10">
                    {{Math.round(100*total*1.055)/100}} €
                </span>
            </div> -->
            <a href="panier" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                Commander
            </a>
        </div>
    </div>
</template>

<script>
import Bus from './../Bus.js'
 export default {
     props: ['initpanier'],
     data(){
         return {
            panier: this.initpanier
         }
     },
     computed: {
         total: function () {
             var total = 0;
             this.panier.forEach(function(el) {
                 total += el.price * el.qty;
             });
             return total; 
         },
         count: function () {
             return this.panier.length
         },
     },
    created() {
        Bus.$on('update', (data)=>{
            this.panier = data
        })
    }
}
</script>