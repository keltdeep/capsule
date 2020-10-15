<template>
    <div class="form-group row">
        <div id="text-area" class="col-md-12 hide">
            <v-textarea
                id="text_letter"
                class="label-left"
                type="text"
                name="text_letter"
                label="Текст письма"
                v-model="text_letter"
                required
                dense
            />
<!--            <textarea id="text_letter"-->
<!--                   type="text"-->
<!--                   class="form-control"-->
<!--                   name="text_letter"-->
<!--                   v-bind:class="{'is-invalid': active}"-->
<!--                   v-model="text_letter"-->
<!--                   rows="5"-->
<!--                   required-->
<!--                   autocomplete="text_letter"-->
<!--                   placeholder="Текст письма"-->
<!--            />-->
            <!--            <slot name="error" />-->
        </div>
    </div>
</template>

<script>


    export default {
        name: "register_text",
        props: {
            active: false,
        },
        data () {
            return {
                text_letter: '',
            }
        }
    }
</script>

<style scoped>
    .col-md-12 textarea {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
        padding-left: 0;
        margin-bottom: 25px;
        box-shadow: none;
    }
</style>
