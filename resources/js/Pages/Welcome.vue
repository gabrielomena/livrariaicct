<template>
  <app-layout title="Welcome">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">INICIO</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg">
          <login></login>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Login from './Auth/Login.vue';


export default {
  components: {
    AppLayout,
    Login,
  },
}
</script>
