<template>
    <div id="container">
        <roof></roof>
        <div class="container">
            <div id="text-content" class="text-justify col-md-8">
                Письмо <br>
                в будущее
            </div>
            <div class="row justify-content-end" id="content-id">
                <div class="col-md-16">
                    <div class="card">
                        <div id="card-body" class="card-body">
                            <div class="title-first">
                                Письмо
                            </div>
                            <div>
                                Оставьте послание будущему себе
                            </div>
                            <form id="form-id" @submit.prevent="onSubmit">
                                <csrf></csrf>
                                <slot name="name"/>
                                <slot name="phone"/>
                                <slot name="email"/>
                                <div id="send-btn">
                                    <button type="submit" class="btn btn-primary btn-rounded" >
                                        Написать в будущее!
                                    </button>
                                </div>
<!--                                <slot name="button"/>-->
                            </form>
                            <div id="text">
                                Нажимая на кнопку, вы соглашаетесь c нашей политикой конфиденциальности
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    import API from "../api";

    export default {
        name: "first_block",
        methods: {
            onSubmit() {
                this.$children[3].$data.phone = this.$children[3].$data.phone.slice(0, 16)
                API.form (
                    this.$children[1].$data.token,
                    this.$children[2].$data.name,
                    this.$children[3].$data.phone,
                    this.$children[4].$data.email,
                )
                .then(() => {
                    const data = {
                        '_token': this.$children[1].$data.token,
                        'name': this.$children[2].$data.name,
                        'phone': this.$children[3].$data.phone,
                        'email': this.$children[4].$data.email,
                    }
                    const obj = JSON.stringify(data);
                    localStorage.setItem('usersData', obj)
                    window.location = '/sendInFuture'
                })
                .catch((error) => {
                    console.log(error)
                })
            }
        }
    }

</script>

<style scoped>
    #container {
        padding-left: 0;
        padding-right: 0;

        background: #cab39c url('https://static.tildacdn.com/lib/unsplash/eff2ef37-8742-7efe-776f-81056139f8fb/photo.jpg') center / cover no-repeat;
        width: 100%;
        height: 100vh;
    }
    .container {
        margin-top: 150px;

    }
    .card-body {
        padding: 28px;
    }
    .card {
        height: 450px;
        border-radius: 15px;
        /*padding: 23px 23px 40px;*/
    }
    #text-content {
        font-size: 5em;
        font-weight: 900;
        float: left;
        color: white;
        margin-bottom: 30px;
    }
    .btn-rounded {
        border-radius: 8px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 10px;
        background: black;
        width: 100%;
        height: 40px;
        color: white;
        border: none;
        margin-bottom: 10px;
    }
    .title-first {
        font-size: large;
        font-weight: 700;
        margin-bottom: 8px;
    }
    #send-btn {
        margin-top: -30px;
    }


</style>
