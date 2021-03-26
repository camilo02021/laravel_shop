<template>
    <div class="container">
        <div class="row">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <div class="product-img">
                        <a :href="productlink">
                            <img :src='productimagepath' >
                        </a>
                    </div>
                </div>
                <a :href="productlink">
                    <h3>
                        {{product.name}}
                    </h3>
                </a>
                <h5>
                    $ {{ new Intl.NumberFormat("es-CO").format(product.price) }}
                    </h5>
                <p>
                    {{htmlToText(product.description)  }}

                </p>
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
