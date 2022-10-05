<template>
  <div class="flex flex-col h-screen justify-between">
    <header
      class="
        bg-icct-verde
        shadow-lg
        min-w-full
        fixed
        h-11
        flex
        justify-center
        items-center
        flex-auto flex-row
      "
    >
      <a href="/" class="flex flex-grow justify-center items-center">
        <img v-if="$page.props.user" class="h-6" src="/img/home.svg" />
      </a>
      <div class="flex gap-2 flex-grow justify-center items-center">
        <b class="text-white text-center font-bold">ICCT - Livraria Virtual</b>
      </div>
      <div class="flex flex-grow justify-center items-center">
        <form @submit.prevent="logout">
          <button v-if="$page.props.user">
            <img class="h-5" src="/img/log-out.svg" />
          </button>
        </form>
      </div>
    </header>

    <main class="mt-10 pb-20">
      <slot></slot>
    </main>

    <footer
      class="
        bg-icct-azul
        fixed
        bottom-0
        min-w-full
        flex
        justify-center
        items-center
        flex-auto flex-row
      "
    >
      <img class="mb-4 mt-2" src="/img/logo_footer.svg" style="height: 60px" />
    </footer>
  </div>
</template>

<script>
export default {
  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
