<template>
    <span class="size-w-59 txt-m-104 cl10">
        {{total}} €
    </span>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props: ['inittotalprice'],
    data(){
        return {
            total: this.inittotalprice
        }
    },
    created(){
         Bus.$on('newsubtotal', (data)=>{
             this.total = Math.round(100*(data * 1.055))/100;
         })
    }
}
</script>