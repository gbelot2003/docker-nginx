<template>
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Pedido No. {{ Itemfactura.id }}</h4>
            <div class="row">
                <div class="col m4">
                    Cliente: <strong>{{ user.name }}</strong>
                </div>
                <div class="col m4">
                    Telefono: <strong>{{ user.mobile }}</strong>
                </div>
                <div class="col m4">
                    Hora: <strong>{{ Itemfactura.updated_at | dateTag }}</strong>
                </div>

            </div>
            <div class="row">
                <div class="col m4">
                    Dirección: <strong>{{ Itemfactura.address }}</strong>
                </div>
                <div class="col m4">
                    casa: <strong>5565</strong>
                </div>

            </div>

            <div class="row">
                <div class="col m12">
                    <hr />
                </div>
            </div>

            <div class="row">
                <div class="col m12">
                    <ul class="collection with-header">
                        <li class="collection-header"><h6>Pedido</h6></li>
                        <li class="collection-item" v-for="item in productos">
                            <div>
                                {{ item.product.name }} -  {{ item.prod_cant }} - {{ productPrice(item.product.price) }}
                                <a href="#!" class="secondary-content">
                                    {{ total(item.product.price, item.prod_cant) }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col m12 ">
                    <p class="right-align moneytotal"><span class="label">Sub-Total:</span> {{ Itemfactura.subtotal }}</p>
                    <p class="right-align moneytotal"><span class="label">Flete:</span> {{ zones.price }}</p>
                </div>

                <div class="col m12 ">
                    <p class="right-align moneytotal"><span class="label">TOTAL:</span> {{ Itemfactura.total }}</p>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="waves-effect waves-green btn">Actualizar</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'FacturaModal',
        props: [
            'Itemfactura', 'user', 'productos', 'zones'],
        data(){
            return {
                factura: this.Itemfactura,
            }
        },
        computed:{
            userD(){
                return this.Itemfactura;
            },
        },
        methods:{
            productPrice(product){
                if(product.offer === true){
                    return product.offer;
                }
                return product.offer_price;
            },
            total (price, cant) {
                return price * cant;
            }
        }
    }
</script>

<style>
    .moneytotal {
        border-bottom: 0.5px solid #cbcbcb;
    }

    .label {
        margin-right: 25px;
    }
</style>