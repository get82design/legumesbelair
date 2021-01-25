<template>
    <button @click="addproduit(prodid)" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30">
        Ajouter au panier
    </button>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props:['prodid'],
    data(){
        return {
            counter: 0,
            id: this.prodid
        }
    },
    created() {
        Bus.$on('counter', (counter)=>{
            this.counter = counter
        })
    },
    methods: {
        addproduit(){
            var panier = [];
            $.ajax({
                type:'POST',
                url:'/ajaxRequestPostQty/'+this.id+'/'+this.counter,
                data:{ id:this.id, qty:this.counter },
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