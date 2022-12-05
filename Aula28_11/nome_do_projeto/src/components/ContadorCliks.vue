<template>
    <div>
        <p>Contador de cliques: {{ contador }}</p>
        <p><button @click="soma">somar</button></p>
    </div>

</template>


<script>
export default{
    name: "ContadorClicks",
    data() {
        return {
            contador: 0,
        };
    },
    methods: {
        soma() {
            this.contador++;

            localStorage.setItem('contador', this.contador)
        },
    },
    created(){
        if (localStorage.getItem('contador')){
            this.contador = localStorage.getItem('contador');
        }
    },
};
</script>