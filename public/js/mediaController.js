//Скрипт по стриму Видео, отправка файла на Бэк и получение ссылки на Видео
$(function ()
{
    document.getElementById('dateLetter').valueAsDate = new Date();
// Store a reference of the preview video element and a global reference to the recorder instance
    const video = document.getElementById('my-preview');

    $('#video-show').hide();
    let recorder;

    // When the user clicks on start video recording
    document.getElementById('btn-start-recording').addEventListener("click", function() {
        // Disable start recording button
        this.disabled = true;

        // Request access to the media devices
        navigator.mediaDevices.getUserMedia({
            audio: true,
            video: {
                width: {min: 1280},
                height: {min: 700}
            }
        }).then(function(stream) {
            // Display a live preview on the video element of the page
            setSrcObject(stream, video);

            // Start to display the preview on the video element
            // and mute the video to disable the echo issue !
            $('#my-preview').show();
            $('#video-show').hide();
            video.play();
            video.muted = true;
            console.warn(stream)

            // Initialize the recorder
            recorder = new RecordRTCPromisesHandler(stream, {
                mimeType: 'video/mp4',
                bitsPerSecond: 128000
            });
            // recorder.setRecordingDuration(20000)
            // Start recording the video
            recorder.startRecording().then(function() {

                console.info('Recording video ...');
            }).catch(function(error) {
                console.error('Cannot start video recording: ', error);
            });

            // release stream on stopRecording
            recorder.stream = stream;
            setTimeout(function() {
                if (recorder.stream.active) {
                alert('Видео больше не записывается, максимум 2 минуты');
                stopped();
                }
            }, 10000);

            // Enable stop recording button
            document.getElementById('btn-stop-recording').disabled = false;
        }).catch(function(error) {
            console.error("Cannot access media devices: ", error);
        });
    }, false);
    // When the user clicks on Stop video recording
    document.getElementById('btn-stop-recording').addEventListener("click", function () {
        stopped();
    }, false);

    //Функция приостановки видео
    function stopped () {
            this.disabled = true;

            recorder.stopRecording().then(function () {
                console.info('stopRecording success');
                console.log(recorder.stream);
                console.log(recorder.stream.active)
                // Retrieve recorded video as blob and display in the preview element
                const blob = recorder.blob;
                let binaryData = [];
                binaryData.push(blob);
                const file = new File([recorder.getBlob()], 'video.mp4', {type: 'video/mp4'})

                const videoUrl = window.URL.createObjectURL(new Blob(binaryData, {type: "video/mp4"}))
                $('#my-preview').hide();
                $('#video-show').show();
                const showVideo = document.getElementById('video-show');
                const formData = new FormData();

                binaryData.push(videoUrl);
                showVideo.src = binaryData[1];
                showVideo.play();

                // Unmute video on preview
                showVideo.muted = false;

                // Stop the device streaming
                recorder.stream.stop();

                const saveVideo = document.getElementById('btn-save-video');
                saveVideo.download = file.name;
                saveVideo.href = binaryData[1];

                formData.append('webVideo', file);
                formData.append('videoURL', videoUrl);
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'))

                // var request = new XMLHttpRequest();
                // request.open("POST", "/sendVideo");
                // request.send(formData);

                // Enable record button again !

                document.getElementById('btn-start-recording').disabled = false;
                $.ajax({
                    type: "POST",
                    url: "/sendVideo",
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (data) {
                        alert('Спасибо, Ваше видео сохранено!'); //То что выводится после успешно отправки
                        $('#video-src').val(data);
                        console.log(data)
                    }
                })
                URL.revokeObjectURL(videoUrl.href);
            }).catch(function (error) {
                console.error('stopRecording failure', error);
            });
    }
})

