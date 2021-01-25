<template>
<div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
    <div @click="moinsun()" class="btn-num-product-down flex-c-m fs-29"></div>

    <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product" id="num-product" :value="countprod">

    <div @click="plusun()" class="btn-num-product-up flex-c-m fs-16" ></div>
</div>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props:['initcountertwo', 'initid', 'initprixproduit'],
    data(){
        return {
            countprod: this.initcountertwo,
            id: this.initid,
            prixproduit: this.initprixproduit
        }
    },
    methods: {
        plusun(){
            this.countprod++;
            Bus.$emit('countertwo', [this.countprod, this.id]);
            Bus.$emit('newprice', [this.prixproduit, 0]);
            var panier = [];
            $.ajax({
                type:'POST',
                url:'/ajaxRequestPostQty/'+this.id+'/'+this.countprod,
                data:{ id:this.id },
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
        },
        moinsun(){
            this.countprod--;
            Bus.$emit('countertwo', [this.countprod, this.id]);
            Bus.$emit('newprice', [0, this.prixproduit]);
            var panier = [];
            $.ajax({
                type:'POST',
                url:'/ajaxRequestPostQty/'+this.id+'/'+this.countprod,
                data:{ id:this.id },
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