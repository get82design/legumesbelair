<template>
    <span>
        {{prixligne}} €
    </span>
</template>

<script>
import Bus from './../Bus.js'
export default {
    props:['initprixligne', 'initprixproduit', 'initid'],
    data(){
        return {
            initprice: this.initprixligne,
            prixligne : this.initprixligne,
            prixproduit: this.initprixproduit,
            id: this.initid
        }
    },
    created() {
        Bus.$on('countertwo', (data)=>{
            //data[0] c'est la qty et data[1] c'est l'id du produit
            if(data[1] == this.id){
                this.prixligne = Math.round(100*(this.initprixproduit * data[0]))/100;
            }
        })
    }
}
</script>