<template>
    <tr>
        <td>{{ item.id }}</td>
        <td><a @click="onTouch(item)">{{ item.user.name }}</a></td>
        <td>{{ item.updated_at | dateTag }}</td>
        <td>{{ item.subtotal }}</td>
        <td>{{ item.zones.price }}</td>
        <td>{{ item.total }}</td>
        <td>estado</td>
    </tr>
</template>

<script>
    export default {
        name: 'Tritems',
        props: ['item'],
        methods:{
            onTouch(item){
                this.$emit('fac_id', item);
            }
        }
    }
</script>