<template>
  <div class="mt-5 grid rounded border-solid border-2 border-gray-600 grid-flow-row auto-rows-max p-2 shadow-md">
    <div class="flex justify-start items-center flex-auto flex-row">
      <a :href="route('profile.show')" >Usuário:<b> {{ usuario.name }}</b></a>
    </div>

    <div class="grid grid-flow-col grid-cols-1 grid-rows-1 md:grid-cols-3 md:grid-rows-1">
      <div class="flex gap-2 justify-start items-center flex-auto flex-row">
        <span>E-mail: <b>{{ usuario.email }}</b></span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["usuario"],
};
</script>
