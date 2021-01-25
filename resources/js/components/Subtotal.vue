<template>
    <span class="size-w-59 txt-m-104 cl6">
        {{subtotal}} €
    </span>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props: ['initsubtotal'],
    data(){
        return {
            subtotal: this.initsubtotal
        }
    },
    created(){
        Bus.$on('newprice', (data)=>{
            //data[0] => prix produit +, data[1] => prix produit -
            console.log('this subtotal', this.subtotal, 'data0', data[0], 'data1', data[1], 'data2',data[2])
            this.subtotal = Math.round(100*(this.subtotal + data[0] - data[1]))/100;
            Bus.$emit('newsubtotal', this.subtotal);
        })
    }
}
</script>