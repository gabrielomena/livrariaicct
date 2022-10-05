<template>
  <app-layout title="Welcome">
    <form
      @submit.prevent="submit"
      class="
        w-full
        max-w-lg
        leading-loose
        container
        mt-14
        p-4
        mx-auto
        h-full
        grid grid-cols-1 grid-rows-5
        border-4 border-solid
        rounded-lg
        shadow-xl
      "
    >
      <div class="flex flex-auto justify-center items-center">
        <img class="h-24" src="/img/logo_calcomp.png" />
      </div>
      <div class="grid grid-rows-2">
        <span class="flex items-end font-bold">CPF</span>
        <input
          class="rounded focus:outline-none focus:border-icct-verde"
          type="text"
          id="cpf"
          placeholder="Digite a seu cpf"
          arial-label="cpf"
          v-model="form.cpf"
          required
        />
      </div>
      <div class="grid grid-rows-2">
        <span class="flex font-bold items-end">Senha</span>
        <input
          class="rounded focus:outline-none focus:border-icct-verde"
          type="password"
          id="password"
          placeholder="Digite sua senha"
          arial-label="password"
          v-model="form.password"
          required
        />
      </div>
      <div class="flex flex-auto justify-center items-center">
        <button
          class="
            bg-icct-azul
            hover:bg-icct-verde
            text-white
            font-bold
            py-2
            px-4
            rounded
          "
          type="submit"
        >
          Entrar
        </button>
      </div>
      <div>
        Usuário novo?
        <a :href="route('register')" class="ml-4 text-icct-azul underline">
          Clique aqui!
        </a>
      </div>
    </form>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    components:{
        AppLayout
    },
  props: {
    canResetPassword: Boolean,
    status: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        cpf: "",
        // email: "",
        password: "",
        remember: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form
        .transform((data) => ({
          ...data,
          remember: this.form.remember ? "on" : "",
        }))
        .post(this.route("login"), {
          onFinish: () => this.form.reset("password"),
        });
    },
  },
};
</script>

