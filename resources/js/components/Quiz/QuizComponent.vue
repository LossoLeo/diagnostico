<template>
  <div>
    <div class="tab" v-if="activeStep === 1">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Se um cliente digitar o segmento da sua empresa no
            <span>google</span> o que ele vai encontrar?
          </h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)" > Seu site e dados na primeira página do Google </a>
              <a @click="add(2)" >
                Apenas os dados básicos, endereços, telefone, horário de
                funcionamento da sua empresa
              </a>
              <a @click="add(3)" > Apenas as Rede sociais do seu negócio </a>
              <a @click="add(4)" > Seus concorrentes nas primeiras posições </a>
              <a @click="add(5)" > Sua empresa não aparece no Google </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 2">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Sua empresa possui um
            <span>plano</span> para aumentar o faturamento através da internet?
          </h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)"  > Sim, possuo um funil trabalhando 24 horas por dia </a>
              <a @click="add(2)" > Não, mas pretendo implementar um processo comercial utilizando a internet nos próximos meses</a>
              <a @click="add(3)" > Não vejo necessidade atualmente </a>
              <a @click="add(4)" > O que é um funil de vendas? </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "quizcomponent.vue",

  data() {
    return {
      activeStep: 1,
      sum: 0,
    };
  },
  methods: {
    add(value) {
      this.activeStep = this.activeStep + 1;
      this.sum += value;
    },
    remove() {
      this.activeStep = this.activeStep - 1;
    },
  },
};
</script>
