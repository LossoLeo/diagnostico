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
              <a
                @click="
                  add(
                    1,
                    'Questão 1',
                    'Seu site e dados na primeira página do Google'
                  )
                "
              >
                Seu site e dados na primeira página do Google
              </a>
              <a
                @click="
                  add(
                    2,
                    'Questão 1',
                    'Apenas os dados básicos, endereços, telefone e horário de funcionamento da empresa'
                  )
                "
              >
                Apenas os dados básicos, endereços, telefone, horário de
                funcionamento da sua empresa
              </a>
              <a
                @click="
                  add(2, 'Questão 1', 'Apenas as Redes sociais do seu negócio')
                "
              >
                Apenas as Rede sociais do seu negócio
              </a>
              <a
                @click="
                  add(3, 'Questão 1', 'Seus concorrentes na primeira posição')
                "
              >
                Seus concorrentes nas primeiras posições
              </a>
              <a
                @click="
                  add(3, 'Questão 1', 'Sua empresa não aparece no Google')
                "
              >
                Sua empresa não aparece no Google
              </a>
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
              <a
                @click="
                  add(
                    1,
                    'Questão 2',
                    'Sim, possuo um funil trabalhando 24 horas por dia'
                  )
                "
              >
                Sim, possuo um funil trabalhando 24 horas por dia
              </a>
              <a
                @click="
                  add(
                    2,
                    'Questão 2',
                    'Não, mas pretendo implementar um processo comercial utilizando a internet nos próximos meses'
                  )
                "
              >
                Não, mas pretendo implementar um processo comercial utilizando a
                internet nos próximos meses</a
              >
              <a
                @click="add(2, 'Questão 2', 'Não vejo necessidade atualmente')"
              >
                Não vejo necessidade atualmente
              </a>
              <a @click="add(3, 'Questão 2', 'O que é um funil de vendas?')">
                O que é um funil de vendas?
              </a>
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
                <h2
                  style="
                    font-size: 16px;
                    color: #21222a;
                    text-align: center;
                    text-transform: none;
                  "
                >
                  *Você pode selecionar mais de 1 opção
                </h2>
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
              <h2
                style="
                  font-size: 16px;
                  color: #21222a;
                  text-align: center;
                  text-transform: none;
                "
              >
                *Você pode selecionar mais de 1 opção
              </h2>
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
              <a @click="add(1, 'Questão 5', 'Sim, tenho interações diárias')">
                Sim, tenho interações diárias
              </a>
              <a @click="add(2, 'Questão 5', 'Sim, tenho postagens semanais')">
                Sim, tenho postagens semanais
              </a>
              <a @click="add(3, 'Questão 5', 'Não estou ativo atualmente')">
                Não estou ativo atualmente
              </a>
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
              <a
                @click="
                  add(
                    1,
                    'Questão 6',
                    'Sim, tenho uma equipe interna que faz isso'
                  )
                "
              >
                Sim, tenho uma equipe interna que faz isso
              </a>
              <a
                @click="
                  add(2, 'Questão 6', 'Sim, tenho esse serviço terceirizado')
                "
              >
                Sim, tenho esse serviço terceirizado
              </a>
              <a
                @click="
                  add(
                    3,
                    'Questão 6',
                    'Não, nunca nem vi, nem comi só ouço falar'
                  )
                "
              >
                Não, nunca vi nem comi, só ouço falar
              </a>
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
              <a @click="add(2, 'Questão 7', 'Menos de R$ 1.000,00')">
                Menos de R$ 1.000,00
              </a>
              <a
                @click="add(2, 'Questão 7', 'Entre R$ 1.000,00 e R$ 2.000,00')"
              >
                Entre R$ 1.000,00 e R$ 2.000,00</a
              >
              <a @click="add(1, 'Questão 7', 'Acima de R$ 2.000,00')">
                Acima de R$ 2.000,00
              </a>
              <a
                @click="
                  add(3, 'Questão 7', 'Não invisto porque não sei como fazer')
                "
              >
                Não invisto porque não sei como fazer
              </a>
              <a
                @click="add(3, 'Questão 7', 'Não invisto porque não acredito')"
              >
                Não invisto porque não acredito
              </a>
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
                <h2
                  style="
                    font-size: 16px;
                    color: #21222a;
                    text-align: center;
                    text-transform: none;
                  "
                >
                  *Você pode selecionar mais de 1 opção
                </h2>
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
              <a @click="add(3, 'Questão 9', 'Menos de 10%')"> Menos de 10% </a>
              <a @click="add(2, 'Questão 9', 'Até 30%')"> Até 30% </a>
              <a @click="add(2, 'Questão 9', 'Até 50%')"> Até 50% </a>
              <a @click="add(1, 'Questão 9', 'Mais de 50%')"> Mais de 50% </a>
              <a @click="add(1, 'Questão 9', '100%')"> 100% </a>
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
              <a
                @click="
                  add(
                    1,
                    'Questão 10',
                    'Sim, meu site tem menos de um ano e está otimizado'
                  )
                "
              >
                Sim, meu site tem menos de um ano e está otimizado
              </a>
              <a
                @click="
                  add(
                    2,
                    'Questão 10',
                    'Acredito que sim, mas meu site já tem mais de dois anos'
                  )
                "
              >
                Acredito que sim, mas meu site já tem mais de dois anos
              </a>
              <a
                @click="
                  add(
                    2,
                    'Questão 10',
                    'Meu site tem mais de dois anos e possívelmente está desatualizado'
                  )
                "
              >
                Meu site tem mais de dois anos e possivelmente está
                desatualizado
              </a>
              <a @click="add(3, 'Questão 10', 'Não possuo site atualmente')">
                Não possuo site atualmente
              </a>
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
              <a
                @click="
                  generateReport(
                    0.5,
                    'Questão 11',
                    'Eu não tenho tempo, e acabo perdendo dinheiro por não implementar nada'
                  )
                "
              >
                Eu não tenho tempo, e acabo perdendo dinheiro por não
                implementar nada
              </a>
              <a
                @click="
                  generateReport(
                    0.5,
                    'Questão 11',
                    'Não encontro mão de obra especializada.'
                  )
                "
              >
                Não encontro mão de obra especializada.
              </a>
              <a
                @click="
                  generateReport(
                    0.6,
                    'Questão 11',
                    'Não preciso vender mais pela internet'
                  )
                "
              >
                Não preciso vender mais pela internet
              </a>
              <a
                @click="
                  generateReport(
                    0.6,
                    'Questão 11',
                    'Não tenho dificuldade, estou ganhando dinheiro atualizando o marketing como parte da minha estratégia comercial'
                  )
                "
              >
                Não tenho dificuldades, estou ganhando dinheiro utilizando o
                marketing como parte da minha estratégia comercial
              </a>
              <a
                @click="
                  generateReport(
                    0.8,
                    'Questão 11',
                    'Não disponho de verba voltada para investir em marketing e vendas'
                  )
                "
              >
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

  props: {
    user: Object,
  },

  data() {
    return {
      activeStep: 1,
      sum: 0,
      checkedSocial: [],
      checkedKnowledge: [],
      checkedField: [],
      result: [],
    };
  },

  methods: {
    generateReport: function () {
      this.$swal({
        type: "success",
        icon: "info",
        title: "Obrigado por responder nossas perguntas.",
        text: "Aguarde enquanto seu relatório está sendo gerado",
        showConfirmButton: false,
      }).then(this.add());
    },
    add(value, question, result) {
      if (this.activeStep < 11) {
        if (question && result) {
          this.result.push({
            question: question,
            result: result,
          });
        }
        this.activeStep = this.activeStep + 1;
        this.sum += value;
      } else {
        let payload = {
          user: this.user,
          sector: this.checkedField,
          socials: this.checkedSocial,
          questions: this.result,
          concept: this.checkedKnowledge,
        };

        axios
          .post("/send-form-email", payload)
          .then((response) => {
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
          })
          .catch((error) => {});
      }
    },
    remove() {
      this.activeStep = this.activeStep - 1;
    },
  },
};
</script>
