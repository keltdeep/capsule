<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form @submit.prevent="onSubmit">

                        <div v-for="index in array">
                            <div :key="index" v-bind="">{{index}}</div>
                        </div>

                        <div class="card-header">Example Component</div>
                        <input v-model="login" @input="onChange"/>
                        <button type="submit">submit</button>
                        <div class="card-body">
                            I'm an example component.
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
        name: "ExampleComponent",
        mixins: [],
        props: ["message"],
        data() {
            return {
                login: '',
                array: ["1", "2", "3"]
            }
        },
        watch: {
            login() {
                console.warn('1111111111111111111')
            },
            message() {

            }
        },
        methods: {
            onChange(event) {
                console.warn(event.target.value)
            },
            onSubmit() {
                API.login(this.login)
                    .then(response => console.warn(response))
                    .catch(err => console.error(err))
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.warn(this.message, this.login)
        },
        beforeCreate() {

        },
        beforeDestroy() {

        },
        beforeUpdate() {

        },
        beforeMount() {

        }
    }
</script>

<style scoped lang="css">

</style>
