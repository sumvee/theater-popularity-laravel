<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import {useForm, Head} from '@inertiajs/vue3';
import Popular from '@/Pages/Theater/Popular.vue';

const form = useForm({
    message: '', date: '',
});

defineProps(['popularTheater', 'availableDates']);
</script>

<template>
    <Head title="Popular Theater"/>

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('theater.popular'), {  })">
                <input
                    type="date"
                    v-model="form.date"
                    placeholder="Select a date"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.date" class="mt-2"/>
                <PrimaryButton class="mt-4">Search</PrimaryButton>
            </form>
            <Popular :popularTheater="popularTheater" :availableDates="availableDates"/>
        </div>
    </AuthenticatedLayout>

</template>
