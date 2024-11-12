<!-- <template> -->
    <!-- <div class="login-container"> -->
        
        <!-- <h2>Login</h2>
        <form @submit.prevent="submit">
            <div>
                <label for="text">Email:</label>
                <input type="text" v-model="form.username" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" v-model="form.password" required />
            </div>
            <button type="submit">Login</button>
        </form> -->

        
    <!-- </div> -->
<!-- </template> -->
<template>
    <section class="bg-blue-500 text-white py-20">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Hi! QUEUEING SYSTEM </h1>
        <p class="text-lg mb-8">In Progress...</p>
        <!-- <h1 class="text-left text-white">Login</h1> -->
        <form @submit.prevent="submit" class="text-left text-white mb-10">
            <div>
                <label for="text">Name:</label>
                <input type="text" class="text-black rounded-lg" v-model="form.username" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" class="text-black rounded-lg " v-model="form.password" required />
            </div>
            <button type="submit" class=" bg-white text-blue-500 px-6 py-2 rounded-full hover:bg-gray-100">Login</button>
        </form>
        <div v-if="user_account" class="text-left">
            <ul>
                <li v-for="(post, index) in user_account" :key="index">
                    <p class="inline mr-2">{{ index }}.</p>
                    <h2 class="inline"> {{ post.user_id }}</h2>
                    <h2 class="inline mr-2">, Password: {{ post.password }}</h2>
                </li>
            </ul>
        </div>
        <!-- {{ user_account }}  -->
      </div>
    </section>
  </template>

<script setup>
import { defineProps, reactive } from 'vue';
// import { Inertia } from 'Inertia\Inertia';
import { Head, Link, useForm } from '@inertiajs/vue3';

// Define props
const props = defineProps({
    // posts: Array,
    user_account: Array,

});

// Define form data as reactive
const form = useForm({
    username: '',
    password: '',
    remember: false,
});


const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
