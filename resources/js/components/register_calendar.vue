<template>
    <div class="form-group row">
        <div class="col-md-8">
<!--            <div class="text-calendar">Когда придет письмо</div>-->
<!--            <v-text-field-->
<!--                id="dateLetter"-->
<!--                class="label-left"-->
<!--                type="date"-->
<!--                name="dateLetter"-->
<!--                label="Когда придет письмо"-->
<!--                :value="dateLetter"-->
<!--                @change="onChange"-->
<!--                required-->
<!--                dense-->
<!--            />-->
            <input id="dateLetter"
                   type="date"
                   class="form-control"
                   name="dateLetter"
                   :value="dateLetter"
                   @change="onChange"
                   required
            />
            <!--            <slot name="error" />-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "register_calendar",
        data() {
            return {
                dateLetter: '2020-10-20'
            }
        },
        watch: {
            dateLetter(value) {
                console.warn(value)
                this.$emit('change', value)
            }
        },
        methods: {
            onChange(e) {
                console.log(e.target.value)
                // this.dateLetter = e;
                this.dateLetter = e.target.value;
                console.log(this.dateLetter)
            }
        },
        mounted() {
            var now = new Date();
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            this.dateLetter = now.getFullYear() + "-" + (month) + "-" + (day);
        }
    }
</script>

<style scoped>
    .col-md-8 input {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
        padding-left: 0;
        margin-bottom: 25px;
        box-shadow: none;
    }
    /*.text-calendar {*/
    /*    margin-top: 25px;*/
    /*}*/
    .form-group {
        margin-top: 20px;

    }
</style>
