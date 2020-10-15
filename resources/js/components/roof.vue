
<template>

<div>
    <nav class="navbar navbar-light">
        <div class="fixed-top" style="width: 100vh">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark" >
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>

        <div id="roof">
            <img src="https://static.tildacdn.com/tild3864-6265-4233-b062-363634306466/ca3120c10c2fdb613b8c.svg" width="65%" height="100px" class="d-inline-block align-top" alt="">
        </div>
<!--        <div>-->
            <span id="contacts">
                +7 (3452) 79-10-57 <br>
                Тюмень, ул. Ленина 38/1
            </span>
            <span id="btn">
                <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModal">
                    Мое послание
                </button>
            </span>
<!--        </div>-->
    </nav>
</div>
</template>

<script>
    // import Modal_login from "./modal_login";
    export default {
        name: "roof",
        // components: {Modal_login}
    }
</script>

<style scoped>
#roof {
    height: 80px;
    padding-left: 370px;
    margin-top: -20px;
    margin-right: 10px;
    float: left;

}
.btn-rounded {
     border-radius: 19px;
     padding: 8px 30px;
     background: white;
     color: black;
     border: none;
     font-weight: 600;


}
    #contacts {
        font-weight: 600;
        font-size: 18px;
        text-align: right;
        margin-top: 8px;


    }
    #btn {
        margin-right: 350px;
        box-shadow: none;
        border: none;
    }
    #roof {
    }
    .fixed-top {
        display: none;
    }
@media screen and (max-width: 640px) {
    .fixed-top {
        display: block;
   }

    #roof, #contacts, #btn {
        display:none;
    }
}
</style>
