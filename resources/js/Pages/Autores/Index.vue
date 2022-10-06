<template>
    <div class="p-3 justify-center content-center animate__animated animate__backInLeft overflow-hidden">
         <div class="bg-gray-300 rounded-lg py-2 px-2 mb-4 text-base text-gray-800 mb-3 text-center" role="alert">
            Autores
        </div>
        <cadastrar-autor></cadastrar-autor>
        <table id="table-autore" class="table-auto pt-5 display stripe hover">
          <thead class="bg-stone-500 text-sm rounded-2xl">
            <tr>
              <th class="px-6 py-2 text-sm text-gray-500">Ações</th>
              <th>Primeiro Nome</th>
              <th>Último Nome</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(autor, index) in autores" :key="index">
              <td class="text-sm flex flex-row items-center text-white w-1/12">
              <edit-autor :autor="autor"></edit-autor>
                <button title="Remover" @click="remover(autor.id)" class="flex border-solid border-2 rounded-lg p-1 items-center bg-red-500 justify-center hover:bg-red-700">
                  <span class="material-icons"> delete_forever </span>
                </button>
              </td>
              <td class="w-6/12 uppercase">{{ autor.primeiro_nome }}</td>
              <td class="w-6/12 uppercase">
                {{ autor.ultimo_nome }}
              </td>
            </tr>
          </tbody>
        </table>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Swal from "sweetalert2";
import CadastrarAutor from "./CadastrarAutor.vue"
import EditAutor from "./EditAutor.vue"

export default {
  props: ["autores"],
  components: {
    AppLayout,
    CadastrarAutor,
    EditAutor
  },
  mounted() {
    $("#table-autore").DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json",
      },
    });
  },
  methods: {
    remover(id) {
      Swal.fire({
        title: "Você tem certeza?",
        text: "Esta ação não poderá ser desfeita!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, pode deletar!",
      }).then((result) => {
        if (result.isConfirmed) {
          this.$inertia.delete(route("deletar-autor", id));
          Swal.fire("Deletado!", "Autor Deletado com Sucesso!", "success");
        }
      });
    },
  },
};
</script>
