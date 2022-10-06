<template>
 <button
    @click="this.showcad = !this.showcad"
    type="button"
    title="Editar"
    class="flex border-solid border-2 rounded-lg p-1 items-center bg-gray-500 justify-center hover:bg-gray-700"
  >
   <span class="material-icons"> edit </span>
  </button>

  <div v-if="showcad" class="z-40 h-screen w-full fixed left-0 top-0 flex justify-center bg-white">
    <!-- modal -->
    <div class="bg-white overflow-x-auto text-gray-700 rounded shadow-lg w-8/12 md:w-4/10">
      <!-- modal body -->
      <form @submit="submitForm" name="cadastro" id="cadastro">
        <div class="p-3">
            <div class="flex mr-2 flex-col">
                <b>Autor:</b>
                <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500  focus:border-indigo-500 uppercase" v-model="livro.autor_id" required>
                    <option selected disabled value=""> -- Selecione um Autor -- </option>
                    <option v-for="(autor, index) in autores" :key="index" :value="autor.id"> {{ autor.primeiro_nome }} {{ autor.ultimo_nome }} </option>
                </select>
            </div>
            <div class="mt-2 text-justify">
                <b>Título:</b>
            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Título do Livro" required v-model="livro.titulo"/>
          </div>
          <div class="mt-2 text-justify">
                <b>ISBN:</b>
            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="ISBN" required v-model="livro.isbn"/>
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
            <span class="material-icons mx-1">save</span> Atualizar
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
  props: ["livro", "autores"],
  data() {
    return {
      showcad: false,
    };
  },
  methods: {
    submitForm() {
        this.showcad = false;
        this.$inertia.post(route("atualizar-livro",this.livro.id), this.livro, {
          _method: "put",
          onSuccess: () => {
            Swal.fire({
              icon: "success",
              title: "Livro Atualizado com sucesso!",
              showConfirmButton: false,
            });
            location.reload(true);
          },
          onError: () => {
            Swal.fire({
              icon: "error",
              title: "Erro ao atualizar Livro",
              showConfirmButton: false,
            });
          },
        });
    },
  },
};
</script>
