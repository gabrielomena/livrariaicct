<template>
  <app-layout title="Autores">
    <div class="grid grid-row-2 w-100 flex p-3 justify-center content-center">
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
  props: [],
  components: {
    AppLayout,
  },
  methods: {
      dataFormatada(index) {
          let data = new Date(index);
      return data.toLocaleDateString("pt-BR", { timeZone: "UTC" });
    }
  }
};
</script>
