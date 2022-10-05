<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">INICIO</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg p-3">
          <perfil :usuario="usuario"></perfil>
          <botoes></botoes>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Perfil from "@/Components/Perfil.vue";
import Botoes from "../Components/Botoes.vue";

export default {
  props: {
    usuario: Object,
  },
  components: {
    AppLayout,
    Perfil,
    Botoes,
  },
};
</script>
