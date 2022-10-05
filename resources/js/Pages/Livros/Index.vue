<template>
  <app-layout title="Livros">
    <div class="bg-icct-peso grid grid-row-2 w-100 flex p-3 justify-center content-center">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 border-b border-gray-200">
        <modal-prato
          :categorias="categorias"
          :ingredientes="ingredientes"
        ></modal-prato>
        <table id="table" class="text-center table-auto display">
          <thead class="bg-gray-50 my-2">
            <tr>
              <th class="px-6 py-2 text-xl text-gray-500">Ações</th>
              <th>Titulo</th>
              <th>IBSN</th>
              <th>Data de Criação</th>
              <th>Data de Atualização</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(livro, index) in livros" :key="index">
              <td class="text-sm flex flex-row items-center text-white w-1/4">
                <!-- <edit-prato
                  :prato="prato"
                  :categorias="categorias"
                  :ingredientes="ingredientes"
                ></edit-prato> -->
                <button
                title="Remover"
                    @click="remover(livro.id)"
                  class="
                    flex
                    border-solid border-2
                    rounded-lg
                    mb-2
                    px-3
                    py-1
                    items-center
                    bg-red-500
                    hover:bg-red-700
                    justify-center
                  "
                >
                  <span class="material-icons"> delete_forever </span>
                </button>
              </td>
              <td class="w-4/5 uppercase">{{ livro.title }}</td>
              <td class="w-1/4 uppercase">
                {{ livro.isbn }}
              </td>
              <td class="w-4/5">{{ livro.created_at }}</td>
              <td class="w-4/5">{{ livro.updated_at }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Swal from "sweetalert2";
export default {
  props: ["livros"],
  mounted() {
    $("#table").DataTable({
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
          this.$inertia.delete(route("deletar-livro", id));
          Swal.fire("Deletado!", "Livro Deletado com Sucesso!", "success");
        }
      });
    },
  },
  components: {
    AppLayout,
  }
};
</script>
