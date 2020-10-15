<template>
    <vue_phone_number_input
        v-model="phone"
        autoDetectCountry
        showFlag="false"
        wrapperClass="wrraper-example"
        inputClass="input-example"
        flagClass="flag-example"
    />
</template>

<script>
    export default {
        name: "vue_phone_number_input",
        data () {
            return {
                phone: '',
            }
        }
    }
</script>

<style scoped>

</style>
