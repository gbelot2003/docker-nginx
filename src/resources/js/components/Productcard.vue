<template>
    <div class="col m4 s12">
        <div class="card horizontal">
            <div class="card-image">
                <img :src="this.product.image_url">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p class="product-title">{{ this.product.name }}</p>
                    <p class="category">Categoria: <span>{{ this.product.category.name }}</span></p>
                    <div class="divider"></div>
                    <p class="price" v-if="this.product.offer"><strike>Precio: Lps. <span>{{ this.product.price }}</span></strike></p>
                    <p class="price" v-else>Precio: Lps. <span>{{ this.product.price }}</span></p>
                    <p class="price" v-if="this.product.offer">Oferta: Lps. <span>{{ product.offer_price }}</span></p>
                    <div class="divider"></div>

                </div>
                <div class="card-action">
                    <a :href="link">Edit</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    window.Echo.channel('private-home')
        .listen('TestEvent', (e) => {
            console.log(e.message);
        });

    export default {
        name: 'ProductCard',
        props: ['product'],
        data(){
            return {
                name: this.product.name
            }
        },
        computed: {
            link(){
                return "\\productos\\" + this.product.id + "\\edit";
            }
        }
    }
</script>

<style>
    .product-title {
        color: darkred;
        font-size: 16px;
        margin: 0 0 10px 0 !important;
    }

    .category {
        font-size: 14px;
    }

    .category span {
        color: brown;
    }

    .price {
        font-size: 15px;
        padding: 10px 0 0 0;

    }

    .price span{
        color:red;
        font-weight: bold;
    }
</style>