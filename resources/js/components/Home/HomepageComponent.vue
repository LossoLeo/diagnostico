<template>
  <div>
    <div class="row">
      <div class="col" style="align-self: self-end">
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
          <form>
            <div class="user-box">
              <input placeholder="Nome" type="text" name="name" required="" />
            </div>
            <div class="user-box">
              <input
                placeholder="Empresa"
                type="text"
                name="company"
                required=""
              />
            </div>
            <div class="user-box">
              <input
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
                placeholder="Email"
                type="email"
                name="email"
                required=""
              />
            </div>
            <a href="#"> Fazer teste </a>
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
    myInputModel: "",
  }),
};
</script>

<style>


</style>
