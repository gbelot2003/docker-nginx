<template>
    <div>
        <table class="highlight ">
            <thead>
            <tr>
                <th>No.</th>
                <th>Cliente</th>
                <th>Fecha de Pedido</th>
                <th>Sub-Total</th>
                <th>Flete</th>
                <th>Total</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
                <tr-items v-for="item in facturas" @fac_id="onClickChild"
                          :item="item" :key="item.id"></tr-items>
            </tbody>
        </table>
    </div>

</template>

<script>
    import TrItems from './TrItems.vue';

    export default {
        name: 'Lineas',
        props:['items'],
        data(){
            return {
                facturas: this.items
            }
        },
        components: { TrItems },
        mounted() {
            this.incomingInvoice()
        },
        methods: {
            onClickChild(item){
                this.$emit('fac_id', item);
            },
            sonud(){
                var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                var source = audioCtx.createBufferSource();
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'bell.mp3');
                xhr.responseType = 'arraybuffer';
                xhr.addEventListener('load', function (r) {
                    audioCtx.decodeAudioData(
                        xhr.response,
                        function (buffer) {
                            source.buffer = buffer;
                            source.connect(audioCtx.destination);
                            source.loop = false;
                        });
                    source.start(0);
                });
                xhr.send();
            },
            sortArrays(arrays) {
                return _.orderBy(arrays, 'id', 'desc');
            },
            incomingInvoice(){
                window.Echo.channel('facturas')
                    .listen('NewInvoice', (e) => {
                        this.facturas.push(e.facturas);
                        this.facturas = this.sortArrays(this.facturas);
                        this.sonud()
                    });
            }
        }
    }
</script>