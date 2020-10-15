<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Пожалуйста, авторизируйтесь для просмотра</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="onSubmit">
                        <csrf></csrf>
                        <slot name="email-modal"/>
                        <slot name="password-modal"/>
                        <div class="row">
                            <div class="col" v-bind:class='{classError: classError}'>
                                {{error}}
                            </div>
                            <div class="modal-footer col">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                <button type="submit" class="btn btn-primary">Войти</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import API from "../api";

    export default {
        name: "modal_login",
        props: ['error', 'classError'],
        methods: {
            onSubmit() {
                console.log(this.$children)
                API.formLogin (
                    this.$children[0].token,
                    this.$children[1].email,
                    this.$children[2].password,
                )
                .then(() => window.location = '/home2')
                .catch(error =>  {
                    let messageError = ''
                    Object.keys(error).forEach(field => {
                    messageError += '\n\n';
                    messageError += error[field].join('\n')
                    })
                    this.error = messageError;
                    this.classError = true;
                    // alert(messageError)
                })
            }
        },
    }
</script>

<style scoped>
    .btn {
        border-radius: 9px;
        color: ghostwhite;
    }
    .btn-primary {
        background-color: black;
        box-shadow: none;
        border: none;
        padding-right: 20px;
        padding-left: 20px;
    }
    .btn-primary:hover {
        background-color: #2b303b;
        transition-duration: 0.3s;
    }
    .modal-content {
        background-color: white;
    }
    .modal-header, .modal-footer {
        border: none;
    }
    .modal-title {
        font-weight: 700;
    }
    .classError {
        border-radius: 10px;
        background-color: #F95D51;
        font-size: 15px;
        font-style: italic;
        text-align: center;
        margin-left: 20px;
        height: 55px;
    }
</style>
