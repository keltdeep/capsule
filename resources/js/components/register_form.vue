<template>
    <div id="container">
        <div class="container" xmlns="http://www.w3.org/1999/html">
            <div class="justify-content-center">
                <div class="col-md-16">
                    <div class="card">
                        <div class="card-body">
                            <form @submit.prevent="onSubmit">
                                <csrf></csrf>
                                <slot name="name"/>
                                <slot name="phone"/>
                                <slot name="email"/>
                                <register_confirm></register_confirm>
                                <slot name="password"/>
                                <register_text></register_text>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <button id="text-btn" type="button" class="btn btn-primary btn-rounded">
                                                Написать текст!
                                            </button>
                                        </div>

                                        <div>
                                            <button id="video-btn" type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModal">
                                                Снять видео!
                                            </button>
                                        </div>
                                        <register_calendar v-on:change="onChangeInput"></register_calendar>
                                    </div>
                                    <div class="col" v-bind:class='{classError: classError}'>
                                        {{error}}
                                    </div>
                                </div>
                                <register_video_input></register_video_input>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-primary btn-rounded-submit"  type="submit">
                                            Готово!
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <modal_video></modal_video>

<!--                            <register_video></register_video>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer_all></footer_all>
    </div>
</template>

<script>
    import API from "../api";

    export default {
        name: "register_form",
        props: ['error', 'classError'],
        data() {
            return {
                calendarDate: '',
            }
        },
        methods: {
            onChangeInput(val) {
                console.warn(val)
                this.calendarDate = val;
            },
            onSubmit(e) {
                // e.preventDefault();
                // e.stopPropagation();
                console.log(e)

                API.formRegister(
                    this.$children[0].$data.token,
                    this.$children[1].$data.name,
                    this.$children[2].$data.phone,
                    this.$children[3].$data.email,
                    this.$children[4].passwordConf,
                    this.$children[5].password,
                    this.$children[6].text_letter,
                    this.calendarDate,
                    // this.$children[8].video,
                )
                .then(() => window.location = '/home2')
                .catch(error => {
                    let messageError = ''
                    Object.keys(error).forEach(field => {
                        messageError += '\n\n';
                        messageError += error[field].join('\n')
                    })
                    this.error = messageError;
                    this.classError = true;
                })
            },
            showTextArea() {

            }
        }
    }

</script>

<style scoped>
    #container {
        width: 100%;
        height: 100vh;
        background-color: white;

        /*background-size: cover;*/
    }
    .card {
        border: none;
        padding-top: 135px;
        padding-bottom: 135px;
        margin-left: 105px;
        margin-right: 105px;
        background-color: white;

    }
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
    .btn-rounded-submit {
        font-size: 18px;
        border-radius: 40px;
        padding: 18px 65px;
        background: black;
        color: white;
        border: none;
        box-shadow: none;
        margin: auto;
    }
    .classError {
        border-radius: 10px;
        background-color: #F95D51;
        font-size: 15px;
        font-style: italic;
        text-align: center;
        padding: 20px;
        height: 130px;
    }

</style>
<style>
    .label-left .v-label {
        left: 0 !important;
        transform-origin: top left !important;
    }
</style>
