<template>
    <div>
        <img alt="Vue logo" src="./assets/logo.png">
        <ContadorClicks/>

        <ImagemVue src="assets/download.jpg" caption="tigre" />
       
    </div>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue';
import ContadorClicks from './components/ContadorCliks.vue';
import ImagemVue from './components/ImagemVue.vue';

export default {
  name: 'App',
  components: {
    ContadorClicks,
    ImagemVue,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
