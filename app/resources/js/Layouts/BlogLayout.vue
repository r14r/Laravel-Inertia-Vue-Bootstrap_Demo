<template>
    <div>

        <Head :title="title" />

        <ToggleTheme />
        <NavBar />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <header v-if="$slots.header" class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

import ToggleTheme from '@/Layouts/Components/ToggleTheme.vue';
import NavBar from '@/Pages/Bootstrap/Examples.Components/ListOfExamples.vue';

defineProps({
    title: String,
});

</script>

<style>
main {
    padding-top: 50px;
}
</style>