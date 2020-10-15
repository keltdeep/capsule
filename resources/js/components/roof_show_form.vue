<template>
    <div id="roof-show-form">
        <p class="text"> Письмо в будущее</p>
    </div>
</template>

<script>
    export default {
        name: "roof_show_form"
    }

</script>

<style scoped>
#roof-show-form {
    position: relative;
    background-image: url('https://thumb.tildacdn.com/tild3538-3736-4938-a363-663530316461/-/format/webp/anniespratt294450.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 500px;
    color: white;
    vertical-align: center;
    overflow: auto;
    display: flex;
    justify-content: center;
    align-items: center;

}
#roof-show-form::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: -webkit-linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));
    background-image: -o-linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));
    background-image: -ms-linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));
    background-image: linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.80));
}
.text {
        font-size: 50px;
    z-index: 0;
    }
</style>
