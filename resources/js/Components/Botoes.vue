<template>
    <div class="md:grid md:grid-flow-col md:gap-4">
        <button  @click="this.showcad = !this.showcad" class="mt-5 grid p-2 grid-flow-col rounded border-solid border border-gray-400 hover:border-dashed hover:border-2 hover:border-blue-500 hover:border-opacity-50">
            <div class="flex gap-2 justify-start items-center flex-auto flex-row">
            <img alt="Saúde Amazonas" src="img/autores.svg" class="h-9" />
            <div class="flex grid auto-row-max grid-flow-row-dense">
                <div class="font-bold">Autores</div>
                <span class="font-semibold text-gray-500">Autores cadastrados</span>
            </div>
            </div>
        </button>

        <a href="/livros" class="mt-5 grid p-2 grid-flow-col rounded border-solid border border-gray-400 hover:border-dashed hover:border-2 hover:border-green-500 hover:border-opacity-50">
            <div class="flex gap-2 justify-start items-center flex-auto flex-row">
            <img alt="Saúde Amazonas" src="img/livros.svg" class="h-9" />
            <div class="flex grid auto-row-max grid-flow-row-dense">
                <div class="font-bold">Livros</div>
                <span class="font-semibold text-gray-500">Livros Cadastrados</span>
            </div>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    data() {
    return {
      showcad: false,
    };
  },
};
</script>
