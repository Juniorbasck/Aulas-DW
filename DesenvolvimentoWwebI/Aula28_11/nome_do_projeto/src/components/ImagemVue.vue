<template>
    <figure>
        <img :src="src" :alt="caption"
        class="figure-img img-fluid rounded" />
        <figcaption class="figure-capition">{{caption}}</figcaption>
    </figure>
</template>

<script>
export default{
    name: "ImagemVue",
    props: {
        src: String,
        caption: String,
    },
};
</script>