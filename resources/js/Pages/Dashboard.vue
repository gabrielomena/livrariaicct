<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">INICIO</h2>
    </template>
    <div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg p-3">
            <perfil :usuario="usuario"></perfil>
            <div class="grid grid-flow-col gap-4">

                <button @click="alterTable('livro')" :class="livroAtivo" class="mt-5 grid p-2 grid-flow-col rounded border-solid border border-gray-400 hover:border-dashed hover:border-2 hover:border-green-500 hover:border-opacity-50">
                    <div class="flex gap-2 justify-start items-center flex-auto flex-row">
                        <img alt="Saúde Amazonas" src="img/livros.svg" class="h-9" />
                        <div class="flex grid auto-row-max grid-flow-row-dense">
                            <div class="font-bold">Livros</div>
                            <span class="font-semibold text-gray-500">Livros Cadastrados</span>
                        </div>
                    </div>
                </button>

                <button  @click="alterTable('autor')" :class="autorAtivo" class="mt-5 grid p-2 grid-flow-col rounded border-solid border border-gray-400 hover:border-dashed hover:border-2 hover:border-blue-500 hover:border-opacity-50">
                    <div class="flex gap-2 justify-start items-center flex-auto flex-row">
                        <img alt="Saúde Amazonas" src="img/autores.svg" class="h-9" />
                        <div class="flex grid auto-row-max grid-flow-row-dense">
                            <div class="font-bold">Autores</div>
                            <span class="font-semibold text-gray-500">Autores cadastrados</span>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div v-if="showAutores">
            <autores :autores="autores"></autores>
        </div>
        <div v-else>
            <livros :livros="livros" :autores="autores"></livros>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Perfil from "@/Components/Perfil.vue";
import Botoes from "../Components/Botoes.vue";
import Autores from "../Pages/Autores/Index.vue"
import Livros from "../Pages/Livros/Index.vue"

export default {
  props: {
    usuario: Object,
    autores: Object,
    livros: Object
  },
  data() {
    return {
        showAutores: false,
        livroAtivo: '',
        autorAtivo: ''
    }
  },
  components: {
    AppLayout,
    Perfil,
    Botoes,
    Autores,
    Livros
  },
  mounted(){
    this.alterTable('livro')
  },
  methods: {
    alterTable(value){
        if (value == 'autor'){
            this.showAutores = true
            this.autorAtivo = 'border-blue-700 border-4'
            this.livroAtivo = null
        }else {
            this.showAutores = false
            this.livroAtivo = 'border-green-700 border-4'
            this.autorAtivo = null
        }
    }
  }
};
</script>
