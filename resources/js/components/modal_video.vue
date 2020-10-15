<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-items-center" id="exampleModalLabel">Вас снимают! =)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <video id="my-preview" class="movie" controls autoplay></video>
                            <video id="video-show" class="movie" controls autoplay></video>
                        </div>

                        <button id="btn-start-recording" class="btn-rounded">Снять послание</button>
                        <button id="btn-stop-recording" class="btn-rounded">Завершить запись</button>
<!--                        отдельная кнопка для скачивания видео-->
<!--                        <button>-->
<!--                            <a id="btn-save-video">save</a>-->
<!--                        </button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "modal_video"
    }
</script>

<style scoped>
    .modal-content {
        width: 90vh;
        height: 90vh;

    }
    #my-preview, #video-show {
        width: 86vh;
        height: 76vh;

    }
    .btn-rounded {
        font-size: 16px;
        border-radius: 10px;
        padding: 0 10px;
        background: black;
        color: white;
        border: none;
        box-shadow: none;
        margin: 5px;
    }

</style>
