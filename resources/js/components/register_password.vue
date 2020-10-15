<template>
    <div class="form-group row">
        <div class="col-md-12">
            <v-text-field
                id="password-confirm"
                class="label-left"
                type="password"
                name="password_confirmation"
                label="Повтор пароля"
                v-model="passwordConf"
                required
                dense
            />
<!--            <input id="password-confirm"-->
<!--                   type="password"-->
<!--                   class="form-control"-->
<!--                   name="password_confirmation"-->
<!--                   v-bind:class="{'is-invalid': active}"-->
<!--                   v-model="passwordConf"-->
<!--                   required-->
<!--                   placeholder="Повтор пароля"-->
<!--            />-->
            <!--            <slot name="error" />-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_password",
        props: {
            active: false,
        },
        data () {
            return {
                passwordConf: '',
            }
        }
    }
</script>

<style scoped>
    .col-md-12 input {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
        padding-left: 0;
        margin-bottom: 25px;
        box-shadow: none;

    }
</style>
