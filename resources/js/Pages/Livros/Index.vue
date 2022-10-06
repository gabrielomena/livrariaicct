<template>
    <div class="p-3 justify-center content-center animate__animated animate__backInLeft overflow-hidden">
        <div class="bg-gray-300 rounded-lg py-2 px-2 mb-4 text-base text-gray-800 mb-3 text-center" role="alert">
            Livros
        </div>
        <cadastrar-livro :autores="autores"></cadastrar-livro>
        <table id="table-livros" class="table-auto pt-5 display stripe hover">
          <thead class="bg-stone-500 text-sm rounded-2xl">
            <tr>
              <th class="px-6 py-2 text-sm text-gray-500">Ações</th>
              <th>Título</th>
              <th>ISBN</th>
              <th>Autor</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(livro, index) in livros" :key="index">
              <td class="text-sm flex flex-row items-center text-white w-1/12">
              <edit-livro :livro="livro" :autores="autores"></edit-livro>
                <!-- <edit-prato
                  :prato="prato"
                  :categorias="categorias"
                  :ingredientes="ingredientes"
                ></edit-prato> -->
                <button title="Remover" @click="remover(livro.id)" class="flex border-solid border-2 rounded-lg p-1 items-center bg-red-500 justify-center hover:bg-red-700">
                  <span class="material-icons"> delete_forever </span>
                </button>
              </td>
              <td class="w-4/12 uppercase">{{ livro.titulo }}</td>
              <td class="w-3/12 uppercase">{{ livro.isbn }}</td>
              <td class="w-6/12 uppercase">{{ autor(livro.autor) }}</td>
            </tr>
          </tbody>
        </table>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import CadastrarLivro from "./CadastrarLivro.vue";
import EditLivro from "./EditLivro.vue"
import Swal from "sweetalert2";

export default {
  props: ["livros","autores"],
  components: {
    AppLayout,
    CadastrarLivro,
    EditLivro
  },
  mounted() {
    $("#table-livros").DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json",
      },
    });
  },
  methods: {
    autor(value){
        if (value) {
            return value.primeiro_nome+' '+value.ultimo_nome
        }else{
            return 'Autor Desconhecido'
        }
    },
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
  }
};
</script>
