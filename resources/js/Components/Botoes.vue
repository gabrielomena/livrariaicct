<template>
  <a
    href="/autores"
    class="
      mt-5
      grid
      p-2
      grid-flow-col
      rounded
      border-solid border border-gray-400
      hover:border-dashed hover:border-2 hover:border-blue-500 hover:border-opacity-50
    "
  >
    <div class="flex gap-2 justify-start items-center flex-auto flex-row">
      <img alt="Saúde Amazonas" src="img/autores.svg" class="h-9" />
      <div class="flex grid auto-row-max grid-flow-row-dense">
        <div class="font-bold">Autores</div>
        <span class="font-semibold text-gray-500"
          >Registro de autores cadastrados</span
        >
      </div>
    </div>
  </a>

  <a
    href="/livros"
    class="
      mt-5
      grid
      p-2
      grid-flow-col
      rounded
      border-solid border border-gray-400
      hover:border-dashed hover:border-2 hover:border-green-500 hover:border-opacity-50
    "
  >
    <div class="flex gap-2 justify-start items-center flex-auto flex-row">
      <img alt="Saúde Amazonas" src="img/livros.svg" class="h-9" />
      <div class="flex grid auto-row-max grid-flow-row-dense">
        <div class="font-bold">Livros</div>
        <span class="font-semibold text-gray-500"
          >Registro de Livros Cadastrados</span
        >
      </div>
    </div>
  </a>
</template>

<script>
export default {};
</script>
