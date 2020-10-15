<template>
    <div class="form-group row">
        <div class="col-md-12">
<!--            <v-text-field-->
<!--                id="phone"-->
<!--                class="label-left"-->
<!--                type="tel"-->
<!--                pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"-->
<!--                placeholder="+7(___)___-__-__"-->
<!--                value="+7(___)___-__-_"-->
<!--                name="phone"-->
<!--                label="Телефон"-->
<!--                v-model="phone"-->
<!--                required-->
<!--                dense-->
<!--            />-->
            <input
                id="phone"
                type="tel"
                class="form-control"
                v-bind:class="{'is-invalid': active}"
                pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                v-model="phone"
                required
                value="+7(___)___-__-__"
                name="phone"
                placeholder="+7(___)___-__-__"
            />
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_phone",
        props: {
            active: false,
        },
        data () {
            return {
                phone: JSON.parse(localStorage.getItem('usersData')).phone || '',
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
