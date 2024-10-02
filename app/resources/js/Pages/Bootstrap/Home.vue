<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Bootstrap">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Bootstrap
            </h2>
        </template>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Hello, Bootstrap with Inertia.js!</h1>
                    <button class="btn btn-primary mt-3" @click="showAlert">Click Me</button>
                </div>
            </div>

        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary" href="#" role="button">Link</a>
                    <button class="btn btn-primary" type="submit">Button</button>
                    <input class="btn btn-primary" type="button" value="Input">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>

    </AppLayout>
</template>

<script>
export default {
    methods: {
        showAlert() {
            alert("Bootstrap button clicked!");
        },
    },
};
</script>


<style lang="css" scoped>
.btn {
    margin: 0 5px 0 5px;
}</style>