<template>
    <div id="container">
        <div class="text">
           <h5> {{name}} , до отправки вашего письма осталось </h5>
           <h1> {{date}} </h1>
        </div>

    </div>
</template>

<script>
    export default {
        name: "show_client_letter",
        props: {
            date: String,
            name: String,
        }
    }
</script>

<style scoped>
    .text {
        z-index: 1;

    }
    #container {
        padding-left: 0;
        padding-right: 0;
        background: #cab39c url('https://static.tildacdn.com/tild3736-3037-4334-b863-353562353039/d946dbce69a24e0288d5.jpg') center / cover no-repeat;
        width: 100%;
        height: 100vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    #container::before {
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
    h5 {
        padding-bottom: 70px;
        text-align: center;
    }
    h1 {
        font-size: 60px;
    }
</style>
