<template>
  <button @click="this.showcad = !this.showcad" type="button" class="mb-3 rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-500 font-extrabold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
    Cadastrar Novo Autor
  </button>

  <div v-if="showcad" class="z-40 h-screen w-full fixed left-0 top-0 flex justify-center bg-white">
    <!-- modal -->
    <div class="bg-white overflow-x-auto rounded shadow-lg w-8/12 md:w-4/10">
      <!-- modal body -->
      <form @submit="submitForm" name="cadastro" id="cadastro">
        <div class="p-3">
          <div class="px-4 text-justify">
            <b>Primeiro Nome:</b>
            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Primeiro Nome" required v-model="form.primeiro_nome"/>
          </div>
          <div class="px-4 mt-2 text-justify">
            <b>Último Nome:</b>
            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Último Nome" required v-model="form.ultimo_nome"/>
          </div>
        </div>
        <div class="flex justify-end items-center w-100 p-3">
          <button @click="this.showcad = !this.showcad" class="flex bg-red-600 hover:bg-red-700 rounded text-white items-center px-3 py-1 mx-2">
            <span class="material-icons"> close </span>Fechar
          </button>
          <button
            type="submit"
            class="
              flex
              bg-blue-600
              hover:bg-blue-700
              rounded
              text-white
              items-center
              px-3
              py-1
            "
          >
            <span class="material-icons mx-1">save</span> Cadastrar
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
  props: [""],
  data() {
    return {
      form: {
         primeiro_nome:'',
         ultimo_nome: ''
      },
      showcad: false,
    };
  },
  methods: {
    submitForm() {
        this.showcad = false;
        this.$inertia.post("autores", this.form, {
          onSuccess: () => {
            Swal.fire({
              icon: "success",
              title: "Autor cadastrado com sucesso!",
              showConfirmButton: false,
            });
            location.reload(true);
          },
          onError: () => {
            Swal.fire({
              icon: "error",
              title: "Erro ao cadastrar categoria",
              showConfirmButton: false,
            });
          },
        });
    },
  },
};
</script>
