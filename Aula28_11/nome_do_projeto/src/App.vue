<template>
    <div>
        <img alt="Vue logo" src="./assets/logo.png">
        <ContadorClicks/>
        <galeriasImagens/>
    </div>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue';
import ContadorClicks from './components/ContadorCliks.vue';
import galeriasImagens from './components/galeriasImagens.vue';

export default {
  name: 'App',
  components: {
    ContadorClicks,
    galeriasImagens,
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
