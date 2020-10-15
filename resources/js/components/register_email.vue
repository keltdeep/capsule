<template>
    <div class="form-group row">
        <div class="col-md-12">
            <v-text-field
                id="email"
                class="label-left"
                type="email"
                name="email"
                label="E-mail"
                v-model="email"
                required
                dense
            />
<!--            <input-->
<!--                id="email"-->
<!--                type="email"-->
<!--                class="form-control"-->
<!--                name="email"-->
<!--                v-bind:class="{'is-invalid': active}"-->
<!--                v-model="email"-->
<!--                required-->
<!--                placeholder="E-mail"-->
<!--            />-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_email",
        props: {
            active: false,
        },
        data () {
            return {
                email: JSON.parse(localStorage.getItem('usersData')).email || '',
            }
        },
    }
</script>

<style scoped>
    .col-md-12 input {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
        padding-left: 0;
        margin-bottom: 5px;
        box-shadow: none;

    }
</style>
