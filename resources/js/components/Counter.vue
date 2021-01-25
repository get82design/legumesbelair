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
    data(){
        return {
            countprod: 1
        }
    },
    methods: {
        plusun(){
            this.countprod++;
            Bus.$emit('counter', this.countprod);
        },
        moinsun(){
            this.countprod--;
            Bus.$emit('counter', this.countprod);
        }
    }
}
</script>