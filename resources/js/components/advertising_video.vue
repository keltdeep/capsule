<template>
<!--    <div class="container">-->
        <div class="col-md-12 text-md-center">
            <iframe width="720"
                    height="407"
                    src="https://www.youtube.com/embed/FOipFOFjWUk"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
            >
            </iframe>
        </div>
<!--    </div>-->
</template>

<script>
    export default {
        name: "advertising_video"
    }
</script>

<style scoped>
.text-md-center {
    background: #f0f0f0 center / cover;
    padding-bottom: 180px;
    padding-top: 180px;
}
@media screen and (max-width: 640px) {
    iframe {
        width: auto;
        height: auto;

    }
}
</style>
