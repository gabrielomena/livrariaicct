<template>
  <app-layout title="Register">
    <Head title="Register" />

    <jet-authentication-card>
      <template #logo>
        <img class="h-24" src="/img/logo_calcomp.png" />
      </template>

      <jet-validation-errors class="mb-4" />

      <form @submit.prevent="submit">
        <div>
          <jet-label for="name" value="Nome" />
          <jet-input
            id="name"
            type="text"
            class="mt-1 block w-full"
            v-model="form.name"
            required
            autofocus
            autocomplete="name"
          />
        </div>

        <div>
          <jet-label for="cpf" value="Cpf" />
          <jet-input
            id="cpf"
            type="text"
            class="mt-1 block w-full"
            v-model="form.cpf"
            required
            autofocus
            autocomplete="cpf"
          />
        </div>
        <div>
          <jet-label for="data_nascimento" value="Data de Nascimento" />
          <jet-input
            id="data_nascimento"
            type="date"
            class="mt-1 block w-full"
            v-model="form.data_nascimento"
            required
            autofocus
            autocomplete="data_nascimento"
          />
        </div>


        <div class="mt-4">
          <jet-label for="email" value="Email" />
          <jet-input
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            required
          />
        </div>

        <div class="mt-4">
          <jet-label for="password" value="Senha" />
          <jet-input
            id="password"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password"
            required
            autocomplete="new-password"
          />
        </div>

        <div class="mt-4">
          <jet-label for="password_confirmation" value="Confirme sua senha" />
          <jet-input
            id="password_confirmation"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password_confirmation"
            required
            autocomplete="new-password"
          />
        </div>

        <div
          class="mt-4"
          v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature"
        >
          <jet-label for="terms">
            <div class="flex items-center">
              <jet-checkbox
                name="terms"
                id="terms"
                v-model:checked="form.terms"
              />

              <div class="ml-2">
                I agree to the
                <a
                  target="_blank"
                  :href="route('terms.show')"
                  class="underline text-sm text-gray-600 hover:text-gray-900"
                  >Terms of Service</a
                >
                and
                <a
                  target="_blank"
                  :href="route('policy.show')"
                  class="underline text-sm text-gray-600 hover:text-gray-900"
                  >Privacy Policy</a
                >
              </div>
            </div>
          </jet-label>
        </div>

        <div class="flex items-center justify-end mt-4">
          <Link
            :href="route('login')"
            class="underline text-sm text-gray-600 hover:text-gray-900"
          >
            Já tem cadastro?
          </Link>

          <jet-button
            class="ml-4"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Cadastrar
          </jet-button>
        </div>
      </form>
    </jet-authentication-card>
  </app-layout>
</template>

<script>
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  components: {
    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    Link,
    AppLayout,
  },

  data() {
    return {
      form: this.$inertia.form({
        name: "",
        cpf: "",
        data_nascimento: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("register"), {
        onFinish: () => this.form.reset("password", "password_confirmation"),
      });
    },
  },
};
</script>
