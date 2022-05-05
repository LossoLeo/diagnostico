<template>
  <div>
    <div class="tab" v-if="activeStep === 1">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Se um cliente digitar o segmento da sua empresa no
            <span>google</span> o que ele vai encontrar?
          </h1>
          <h1>1 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)">
                Seu site e dados na primeira página do Google
              </a>
              <a @click="add(2)">
                Apenas os dados básicos, endereços, telefone, horário de
                funcionamento da sua empresa
              </a>
              <a @click="add(2)"> Apenas as Rede sociais do seu negócio </a>
              <a @click="add(3)"> Seus concorrentes nas primeiras posições </a>
              <a @click="add(3)"> Sua empresa não aparece no Google </a>
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
          <h1>2 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)">
                Sim, possuo um funil trabalhando 24 horas por dia
              </a>
              <a @click="add(2)">
                Não, mas pretendo implementar um processo comercial utilizando a
                internet nos próximos meses</a
              >
              <a @click="add(2)"> Não vejo necessidade atualmente </a>
              <a @click="add(3)"> O que é um funil de vendas? </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 3">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Qual
            <span>setor</span> de atuação?
          </h1>
          <h1>3 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <div class="row">
                <input
                  type="checkbox"
                  id="physicalretail"
                  value="physicalretail"
                  v-model="checkedField"
                />
                <label for="physicalretail">Varejo Físico</label>

                <input
                  type="checkbox"
                  id="digitalretail"
                  value="digitalretail"
                  v-model="checkedField"
                />
                <label for="digitalretail">Varejo Digital</label>

                <input
                  type="checkbox"
                  id="technology"
                  value="technology"
                  v-model="checkedField"
                />
                <label for="technology">Tecnologia</label>
                <input
                  type="checkbox"
                  id="serviceprovider"
                  value="serviceprovider"
                  v-model="checkedField"
                />
                <label for="serviceprovider">Prestadora de Serviços</label>
                <input
                  type="checkbox"
                  id="industry"
                  value="industry"
                  v-model="checkedField"
                />
                <label for="industry">Indústria</label>
                <input
                  type="checkbox"
                  id="agro"
                  value="agro"
                  v-model="checkedField"
                />
                <label for="agro">Agronegócios</label>
                <input
                  type="checkbox"
                  id="health"
                  value="health"
                  v-model="checkedField"
                />
                <label for="health">Saúde</label>
                <input
                  type="checkbox"
                  id="other"
                  value="other"
                  v-model="checkedField"
                />
                <label for="other">Outro</label>
              </div>
              <button
                style="
                  position: relative;
                  display: inline-block;
                  padding: 10px 30px;
                  color: #ffffff;
                  font-size: 18px;
                  overflow: hidden;
                  text-decoration: none;
                  transition: 1s;
                  margin-top: 40px;
                  letter-spacing: 1px;
                  background-color: #ff5858;
                  border-radius: 30px;
                  border-color: #21222a;
                  border-style: solid;
                  border-width: 2px;
                  font-weight: 600;
                  transition: 0.5s;
                  cursor: pointer;
                "
                @click="add(0)"
              >
                Avançar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 4">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Em quais
            <span>redes sociais</span> a sua empresa está presente?
          </h1>
          <h1>4 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <div class="row">
              <input
                type="checkbox"
                id="facebook"
                value="facebook"
                v-model="checkedSocial"
              />
              <label for="facebook">Facebook</label>

              <input
                type="checkbox"
                id="Instagram"
                value="Instagram"
                v-model="checkedSocial"
              />
              <label for="Instagram">Instagram</label>

              <input
                type="checkbox"
                id="linkedin"
                value="linkedin"
                v-model="checkedSocial"
              />
              <label for="linkedin">Linkedin</label>
              <input
                type="checkbox"
                id="twitter"
                value="twitter"
                v-model="checkedSocial"
              />
              <label for="twitter">Twitter</label>
              <input
                type="checkbox"
                id="nosocial"
                value="nosocial"
                v-model="checkedSocial"
              />
              <label for="nosocial">Minha empresa não tem redes sociais</label>
            </div>
            <button
              style="
                position: relative;
                display: inline-block;
                padding: 10px 30px;
                color: #ffffff;
                font-size: 18px;
                overflow: hidden;
                text-decoration: none;
                transition: 1s;
                margin-top: 40px;
                letter-spacing: 1px;
                background-color: #ff5858;
                border-radius: 30px;
                border-color: #21222a;
                border-style: solid;
                border-width: 2px;
                font-weight: 600;
                transition: 0.5s;
                cursor: pointer;
              "
              @click="add(0)"
            >
              Avançar
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 5">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Você está ativo nas suas
            <span>redes sociais</span> ?
          </h1>
          <h1>5 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)"> Sim, tenho interações diárias </a>
              <a @click="add(2)"> Sim, tenho postagens semanais </a>
              <a @click="add(3)"> Não estou ativo atualmente </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 6">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Sua empresa investe em
            <span>gestão de tráfego</span> pago?
          </h1>
          <h1>6 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)">
                Sim, tenho uma equipe interna que faz isso
              </a>
              <a @click="add(2)"> Sim, tenho esse serviço terceirizado </a>
              <a @click="add(3)"> Não, nunca vi nem comi, só ouço falar </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 7">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Quanto a sua empresa investe em
            <span>tráfego pago</span> ?
          </h1>
          <h1>7 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(2)"> Menos de R$ 1.000,00 </a>
              <a @click="add(2)"> Entre R$ 1.000,00 e R$ 2.000,00</a>
              <a @click="add(1)"> Acima de R$ 2.000,00 </a>
              <a @click="add(3)"> Não invisto porque não sei como fazer </a>
              <a @click="add(3)"> Não invisto porque não acredito </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 8">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Quais desses
            <span>conceitos</span> você conhece?
          </h1>
          <h1>8 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <div class="row">
                <input
                  type="checkbox"
                  id="paidLinks"
                  value="paidLinks"
                  v-model="checkedKnowledge"
                />
                <label for="paidLinks">Links patrocinados</label>
                <input
                  type="checkbox"
                  id="emailfunnel"
                  value="emailfunnel"
                  v-model="checkedKnowledge"
                />
                <label for="emailfunnel">Funil de email</label>

                <input
                  type="checkbox"
                  id="marketing"
                  value="marketing"
                  v-model="checkedKnowledge"
                />
                <label for="marketing">Inbound Marketing</label>

                <input
                  type="checkbox"
                  id="seo"
                  value="seo"
                  v-model="checkedKnowledge"
                />
                <label for="seo">SEO</label>
                <input
                  type="checkbox"
                  id="branding"
                  value="branding"
                  v-model="checkedKnowledge"
                />
                <label for="branding">Branding</label>
                <input
                  type="checkbox"
                  id="noknowledge"
                  value="noknowledge"
                  v-model="checkedKnowledge"
                />
                <label for="noknowledge">Nenhum</label>
              </div>
              <button
                style="
                  position: relative;
                  display: inline-block;
                  padding: 10px 30px;
                  color: #ffffff;
                  font-size: 18px;
                  overflow: hidden;
                  text-decoration: none;
                  transition: 1s;
                  margin-top: 40px;
                  letter-spacing: 1px;
                  background-color: #ff5858;
                  border-radius: 30px;
                  border-color: #21222a;
                  border-style: solid;
                  border-width: 2px;
                  font-weight: 600;
                  transition: 0.5s;
                  cursor: pointer;
                "
                @click="add(0)"
              >
                Avançar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 9">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Quantos % do seu
            <span>faturamento</span> vem da internet hoje?
          </h1>
          <h1>9 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(3)"> Menos de 10% </a>
              <a @click="add(2)"> Até 30% </a>
              <a @click="add(2)"> Até 50% </a>
              <a @click="add(1)"> Mais de 50% </a>
              <a @click="add(1)"> 100% </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 10">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Seu
            <span>site</span> possui otimização e está atualizado?
          </h1>
          <h1>10 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="add(1)">
                Sim, meu site tem menos de um ano e está otimizado
              </a>
              <a @click="add(2)">
                Acredito que sim, mas meu site já tem mais de dois anos
              </a>
              <a @click="add(2)">
                Meu site tem mais de dois anos e possivelmente está
                desatualizado
              </a>
              <a @click="add(3)"> Não possuo site atualmente </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tab" v-if="activeStep === 11">
      <div class="row">
        <div class="col" style="align-self: center">
          <h1>
            Na sua opinião, quais as principais
            <span>dificuldades</span> que você encontra na hora de incluir as
            ferramentas de <span>marketing digital</span> na sua estratégia
            comercial?
          </h1>
          <h1>11 / 11</h1>
        </div>
        <div class="col" style="text-align: -webkit-center">
          <div class="login-box" style="align-self: center">
            <form style="display: inline-grid">
              <a @click="generateReport(0.5)">
                Eu não tenho tempo, e acabo perdendo dinheiro por não
                implementar nada
              </a>
              <a @click="generateReport(0.5)">
                Não encontro mão de obra especializada.
              </a>
              <a @click="generateReport(0.6)">
                Não preciso vender mais pela internet
              </a>
              <a @click="generateReport(0.6)">
                Não tenho dificuldades, estou ganhando dinheiro utilizando o
                marketing como parte da minha estratégia comercial
              </a>
              <a @click="generateReport(0.8)">
                Não disponho de verba voltada para investir em marketing e
                vendas
              </a>
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
  model: {
    prop: "checked",
  },
  data() {
    return {
      activeStep: 1,
      sum: 0,
      checkedSocial: [],
      checkedKnowledge: [],
      checkedField: [],
    };
  },
  methods: {
    generateReport: function () {
      this.$swal({
        type: "success",
        icon: "info",
        title:
          "Obrigado por responder nossas perguntas.",
        text: "Aguarde enquanto seu relatório está sendo gerado",
        showConfirmButton: false,
      }).then(this.add());
    },
    add(value) {
      if (this.activeStep < 11) {
        this.activeStep = this.activeStep + 1;
        this.sum += value;
      } else {
        if (this.sum <= 10) {
          window.setTimeout(function () {
            window.location.href = "/parabens";
          }, 3000);
        }
        if (this.sum > 10 && this.sum <= 14) {
          window.setTimeout(function () {
            window.location.href = "/cuidado";
          }, 3000);
        }
        if (this.sum >= 15) {
          window.setTimeout(function () {
            window.location.href = "/alerta";
          }, 3000);
        }
      }
    },
    remove() {
      this.activeStep = this.activeStep - 1;
    },
  },
};
</script>
