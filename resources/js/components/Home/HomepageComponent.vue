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
              v-model="phone"
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
          <button type="submit" value="Enviar" @click="validateForm">
            Fazer teste
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "homepage.vue",
  data() {
    return {
      name: null,
      company: null,
      phone: null,
      email: null,
    };
  },
  methods: {
    validateForm: function () {
      if (
        this.name != null &&
        this.company != null &&
        this.email != null &&
        this.phone != null
      ) {
        this.sendFormsub();
      } else {
        this.$swal(
          "Ops, formulário inválido",
          "Por favor tente novamente",
          "error"
        );
      }
    },
    sendFormsub: function () {
      let payload = {
        name: this.name,
        email: this.email,
        phone: this.phone,
        company: this.company,
      };

      axios
        .post("/register-candidate", payload)
        .then((response) => {
          this.$swal({
            type: "success",
            icon: "success",
            title:
              "Muito obrigado,você será redirecionado para nosso questionário em alguns segundos.",
            text: "Responda de forma mais fiel possível para entendermos a sua empresa",
            showConfirmButton: false,
          });

          const user = response.data.user;
          window.setTimeout(function () {
            window.location.href = "/quiz?id="+user;
          }, 5500);
        })
        .catch((error) => {
          console.log("erro => ", error);
        });
    },
  },
};
</script>

<style>
button {
  position: relative;
  display: inline-block;
  padding: 10px 30px;
  color: #ffffff;
  font-size: 22px;
  text-decoration: none;
  text-transform: capitalize;
  overflow: hidden;
  transition: 1s;
  margin-top: 40px;
  letter-spacing: 1px;
  background-color: #ff5858;
  border-radius: 30px;
  font-weight: 500;
  border-color: transparent;
}

.alert-in {
  animation-name: opacity-in;
  animation-duration: 2s;
}
</style>


https://script.google.com/macros/s/AKfycbx38OY0EkTRiMmSydAPm-k7JxOaX2AP_oPo3SA2JYuLPJNwVR3ZSCqZZzwo-RNPxJWGGw/exec
