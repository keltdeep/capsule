<template>
    <div>
        <div>
            <video id="my-preview" class="movie" controls autoplay></video>
            <video id="video-show" class="movie" controls autoplay></video>
        </div>
        <button id="btn-start-recording" class="btn-rounded">start</button>
        <button id="btn-stop-recording" class="btn-rounded">stop</button>
        <button><a id="btn-save-video" class="btn-rounded">save</a></button>
    </div>
</template>

<script>
    export default {
        name: "register_video",
        props: {
            value: '',
        }
    }
</script>

<style scoped>
    .btn-rounded {
        font-size: 18px;
        border-radius: 19px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 10px;
        background: black;
        color: white;
        border: none;
        box-shadow: none;
        margin: 5px;
    }
</style>
