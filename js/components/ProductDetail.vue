<template>

    <div class="container">
        <div class="row">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <div class="product-img">
                       
                        <img :src='productimagepath' >
                        
                    </div>
                </div>
                <button @click="addToCart"  class="button add-to-cart" style="border-radius: 50px;  font-size: 16px;">
                    <i class="fa fa-plus"></i> 
                </button>
            </div>
        </div>
    </div> 

</template>

<script>

    export default {
        props:['product','productlink','productimagepath'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addToCart(){
                bus.$emit('added-to-cart',this.product);
            },
            addToCompare(){
                bus.$emit('added-to-compare',this.product);
            },
            htmlToText(html) {
                var tag = document.createElement('div');
                tag.innerHTML = html;

                return tag.innerText;
            }
        }

       

    }
</script>
