<template>
    <div class="form-group row">
        <div class="col-md-12">
            <v-text-field
                id="password"
                class="label-left"
                type="password"
                name="password"
                label="Пароль"
                v-model="password"
                required
                dense
            />
<!--            <input id="password"-->
<!--                   type="password"-->
<!--                   class="form-control"-->
<!--                   name="password"-->
<!--                   v-model="password"-->
<!--                   required-->
<!--                   autocomplete="password"-->
<!--                   placeholder="Пароль"-->
<!--            />-->
            <!--            <slot name="error" />-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_confirm",
        data () {
            return {
                password: '',
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
