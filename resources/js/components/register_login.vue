<template>
    <div class="form-group row">
        <div class="col-md-12">
<!--            <div class="placeholder">Имя</div>-->
            <v-text-field
                id="name"
                class="label-left"
                type="text"
                name="name"
                label="Имя"
                v-model="name"
                autofocus
                required
                dense
            />
<!--            <input id="name"-->
<!--                   type="text"-->
<!--                   class="form-control"-->
<!--                   name="name"-->
<!--                   v-bind:class="{'is-invalid': active}"-->
<!--                   v-model="name"-->
<!--                   required-->
<!--                   autocomplete="name"-->
<!--                   autofocus-->
<!--            />-->
<!--            <slot name="error" />-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_login",
        props: {
            active: false,
        },

        data() {
            return {
                name: JSON.parse(localStorage.getItem('usersData')).name || '',
            }
        },
        watch: {
            login() {
                console.warn('1111111111111111111')
            },
        },
    }


</script>

<style scoped>
    /*.col-md-12 input {*/
    /*    border: none;*/
    /*    border-bottom: 1px solid black;*/
    /*    border-radius: 0;*/
    /*    padding-left: 0;*/
    /*    margin-bottom: 25px;*/
    /*    margin-top: 25px;*/
    /*    box-shadow: none;*/
    /*}*/

    /*.placeholder {*/
    /*    font-size: 1em;*/
    /*    transition: font-size 0.3s ease;*/
    /*}*/
    /*.col-md-12:focus-within {*/
    /*    font-size: 0.7em;*/
    /*    transition: font-size 0.3s ease;*/
    /*}*/
    /*.placeholder {*/
    /*    padding: 10px 0;*/
    /*    margin-bottom: -45px;*/
    /*}*/
    /*::-webkit-input-placeholder       {font-size: 1em;   transition: font-size 0.3s ease;}*/
    /*::-moz-placeholder                {text-indent: 0;   transition: text-indent 0.3s ease;}*/
    /*:-moz-placeholder                 {text-indent: 0;   transition: text-indent 0.3s ease;}*/
    /*:-ms-input-placeholder            {text-indent: 0;   transition: text-indent 0.3s ease;}*/
    /*:focus::-webkit-input-placeholder {font-size: 0.7em; transition: font-size 0.3s ease;}*/
    /*:focus::-moz-placeholder          {text-indent: 10px; transition: text-indent 0.3s ease;}*/
    /*:focus:-moz-placeholder           {text-indent: 10px; transition: text-indent 0.3s ease;}*/
    /*:focus:-ms-input-placeholder      {text-indent: 10px; transition: text-indent 0.3s ease;}*/


</style>


