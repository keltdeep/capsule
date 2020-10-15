<template>
        <input id="video-src"
               type="hidden"
               name="video-src"
               v-bind:value="video"
        />
</template>

<script>
    export default {
        name: "register_video_input",
        props: {
            video: '',
        }
    }
</script>

<style scoped>

</style>
