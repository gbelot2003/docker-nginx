<template>
    <div class="container">

        <div class="row">
            <div class="col s12 m10">
                <h2>Pedidos</h2>
            </div>
            <div class="col s12 m2">
                <div class="right-align" style="padding-top: 2rem">
                    <a class="btn-floating btn-large waves-effect waves-light btn modal-trigger blue">
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <lineas :items="items" @fac_id="getItem"></lineas>
        </div>

        <!-- Modal Structure -->
        <pedidos-modal
                :Itemfactura="factura"
                :user="user"
                :productos="productos"
                :zones="zones"
        ></pedidos-modal>
    </div>
</template>

<script>
    import Lineas from './Lineas.vue'
    import PedidosModal from './PedidosModal.vue'

    export default {
        name: 'facturas',
        props: ['items'],
        components:{ Lineas, PedidosModal },
        data(){
            return {
                factura: '',
                user: '',
                productos:'',
                zones: '',
            }
        },
        methods:{
            async getItem(item){
                await axios.get('/pedidos/' + item.id)
                    .then(resp => {
                        this.factura = resp.data;
                        this.user = resp.data.user;
                        this.productos = resp.data.products;
                        this.zones = resp.data.zones;
                        console.log(resp.data);
                        this.modalOpen()
                    }).catch(e => {
                        console.log(e)
                    })
            },
            modalOpen(){
                $('#modal1').modal('open');
            }
        }

    }
</script>