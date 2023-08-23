<template>
    <div>
        <h2>Meus animais </h2>
        <hr/>
        <div class="d-flex">
            <ImagemVue src="./download.jpg" caption="capivara" />
            <ImagemVue src="./OIP.jpg" caption="tigre" />
            <ImagemVue src="./R.jpg" caption="panda"/>
        </div>
    </div>
</template>

<script>
import ImagemVue from "./ImagemVue.vue";
export default{
    name: "GaleriaImagens",
    components: {
        ImagemVue,
    },
};
</script>

<style scoped>
    h1{
        text-align: left;
    }
    div{
        background-color:  #cdcdcd;
    }
</style>