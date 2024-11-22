<script setup>
import {usePage, Head} from '@inertiajs/vue3';

const {props} = usePage();
defineProps(['popularTheater', 'availableDates']);


</script>

<template>


    <div v-if="popularTheater">
        <h1 class="text-2xl font-bold text-center mt-12">{{ popularTheater.name }}</h1>
    </div>
    <div v-else/>

    <div v-if="availableDates && availableDates.length">
        <h1 class="text-2xl font-bold text-center mt-12">No Theater available for given date</h1>
        <h6 class="text-2xl font-bold text-center mt-12">Available Dates</h6>
        <ul class="text-center">
            <li v-for="date in availableDates" :key="date">{{ date.date }}</li>
        </ul>
    </div>


</template>
