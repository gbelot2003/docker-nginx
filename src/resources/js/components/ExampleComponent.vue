<template>
    <div class="col m12 s12">
        <p class="red-text">Esto es para pruebas de websokets</p>
        <ul>
            <li v-for="item in tlist">{{ item.message }}</li>
        </ul>

    </div>
</template>

<script>
    export default {
        data(){
            return {
                tlist:[{message: ''}]
            }
        },
        mounted() {
            this.checkIncoming();
        },
        methods: {
          checkIncoming(){
              window.Echo.channel('home')
                  .listen('TestEvent', (e) => {
                      console.log(e.message);
                      this.tlist.push({message: e.message});
                  });
          }
        }
    }
</script>
