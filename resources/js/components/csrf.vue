
<template>

    <input type="hidden" name="_token" :value="token">
</template>

<script>
    export default {
        name: "csrf",
        data: () => ({
            "token": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        })
    }
</script>

<style scoped>

</style>
