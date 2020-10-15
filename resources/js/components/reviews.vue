<template>
    <div id="content">
        <h1 class="text-md-center">Отзывы наших клиентов</h1>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <h5 class="text-md-center">Отзыв 1</h5>
                    <img class="d-block" width="130" height="130" src="https://static.tildacdn.com/tild3062-3736-4032-b165-343162633235/image.png" alt="First slide" style="margin: auto; border-radius: 50%">
                    <div class="text-fio">Фамилия Имя</div>
                </div>
                <div class="carousel-item">
                    <h5 class="text-md-center">Отзыв 2</h5>
                    <img class="d-block" width="130" height="130" src="https://static.tildacdn.com/tild3863-6564-4138-b263-346538346134/image.png" alt="Second slide" style="margin: auto; border-radius: 50%">
                    <div class="text-fio">Имя Фамилия</div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "reviews"
    }
</script>

<style scoped>
#content {
    padding: 135px 0;
}
.carousel-indicators li {
    background-color: black;
}
.carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        border-radius: 50%;
        background-position: 55% center;
        background-size: 50%;
        width: 30px;
        height: 30px;
    }
    .carousel-control-prev-icon {
        background-position-x: 45%;
    }
.carousel-control-prev, .carousel-control-next {
    opacity: 1;
}
    .text-md-center {
        margin-bottom: 40px;
        font-weight: 600;
        text-align: center;
        /*text-justify: auto;*/
        align-items: center;

    }
    .text-fio {
        margin-bottom: 60px;
        margin-top: 20px;
        text-align: center;
        /*display: flex;*/
        /*text-justify: auto;*/
        align-items: center;
    }
</style>
