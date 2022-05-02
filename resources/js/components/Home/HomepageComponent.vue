<template>
  <div>
    <div class="row">
      <div class="col" style="align-self: self-end; padding-bottom: 5%">
        <h1>
          Sua empresa está preparada para <span>faturar mais</span> em 2022?
        </h1>
      </div>
      <div class="col" style="text-align: -webkit-center">
        <div class="login-box" style="padding-top: 15%">
          <h2>Diagnóstico grátis</h2>
          <h5>
            Descubra em poucos minutos como está o Marketing Digital da sua
            empresa e o que fazer para alavancar suas vendas em 2022
          </h5>
          <form @submit="checkForm" novalidate="true">
            <div class="user-box">
              <input
                id="name"
                placeholder="Nome"
                v-model="name"
                type="text"
                name="name"
                required=""
              />
            </div>
            <div class="user-box">
              <input
                id="company"
                placeholder="Empresa"
                type="text"
                v-model="company"
                name="company"
                required=""
              />
            </div>
            <div class="user-box">
              <input
                id="phone"
                placeholder="Celular"
                type="text"
                name="phone"
                required=""
                v-model="myInputModel"
                v-mask="'(##) # ####-####'"
              />
            </div>
            <div class="user-box">
              <input
                id="email"
                placeholder="Email"
                type="email"
                v-model="email"
                name="email"
                required=""
              />
            </div>
            <a type="submit" value="Enviar" href="/quiz"> Fazer teste </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "homepage.vue",
  data: () => ({
    errors: [],
    myInputModel: "",
    name: null,
    company: null,
    phone: null,
    email: null,
  }),

  methods: {
    checkForm: function (e) {
      this.errors = [];

      if (!this.name) {
        this.errors.push("O nome é obrigatório.");
      }
      if (!this.company) {
        this.errors.push("O nome da sua empresa é obrigatório.");
      }
      if (!this.phone) {
        this.errors.push("Telefone é obrigatório.");
      }
      if (!this.email) {
        this.errors.push("O e-mail é obrigatório.");
      } else if (!this.validEmail(this.email)) {
        this.errors.push("Utilize um e-mail válido.");
      }

      if (!this.errors.length) {
        return true;
      }

      e.preventDefault();
    },
    validEmail: function (email) {
      var re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
  },
};
</script>

<style>
</style>
