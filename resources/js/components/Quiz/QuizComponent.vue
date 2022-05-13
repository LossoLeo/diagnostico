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
                    'Se um cliente digitar o segmento da sua empresa no google o que ele vai encontrar?',
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
                    'Se um cliente digitar o segmento da sua empresa no google o que ele vai encontrar?',
                    'Apenas os dados básicos, endereços, telefone e horário de funcionamento da empresa'
                  )
                "
              >
                Apenas os dados básicos, endereços, telefone, horário de
                funcionamento da sua empresa
              </a>
              <a
                @click="
                  add(
                    2,
                    'Se um cliente digitar o segmento da sua empresa no google o que ele vai encontrar?',
                    'Apenas as Redes sociais do seu negócio'
                  )
                "
              >
                Apenas as Rede sociais do seu negócio
              </a>
              <a
                @click="
                  add(
                    3,
                    'Se um cliente digitar o segmento da sua empresa no google o que ele vai encontrar?',
                    'Seus concorrentes na primeira posição'
                  )
                "
              >
                Seus concorrentes nas primeiras posições
              </a>
              <a
                @click="
                  add(
                    3,
                    'Se um cliente digitar o segmento da sua empresa no google o que ele vai encontrar?',
                    'Sua empresa não aparece no Google'
                  )
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
                    'Sua empresa possui um plano para aumentar o faturamento através da internet?',
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
                    'Sua empresa possui um plano para aumentar o faturamento através da internet?',
                    'Não, mas pretendo implementar um processo comercial utilizando a internet nos próximos meses'
                  )
                "
              >
                Não, mas pretendo implementar um processo comercial utilizando a
                internet nos próximos meses</a
              >
              <a
                @click="
                  add(
                    2,
                    'Sua empresa possui um plano para aumentar o faturamento através da internet?',
                    'Não vejo necessidade atualmente'
                  )
                "
              >
                Não vejo necessidade atualmente
              </a>
              <a
                @click="
                  add(
                    3,
                    'Sua empresa possui um plano para aumentar o faturamento através da internet?',
                    'O que é um funil de vendas?'
                  )
                "
              >
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
                  id="Varejo_Fisico"
                  value="Varejo_Fisico"
                  v-model="checkedField"
                />
                <label for="Varejo_Fisico">Varejo Físico</label>

                <input
                  type="checkbox"
                  id="Varejo_Digital"
                  value="Varejo_Digital"
                  v-model="checkedField"
                />
                <label for="Varejo_Digital">Varejo Digital</label>

                <input
                  type="checkbox"
                  id="Tecnologia"
                  value="Tecnologia"
                  v-model="checkedField"
                />
                <label for="Tecnologia">Tecnologia</label>
                <input
                  type="checkbox"
                  id="Prestadora_de_Servicos"
                  value="Prestadora_de_Servicos"
                  v-model="checkedField"
                />
                <label for="Prestadora_de_Servicos"
                  >Prestadora de Serviços</label
                >
                <input
                  type="checkbox"
                  id="Industria"
                  value="Industria"
                  v-model="checkedField"
                />
                <label for="Industria">Indústria</label>
                <input
                  type="checkbox"
                  id="Agronegocio"
                  value="Agronegocio"
                  v-model="checkedField"
                />
                <label for="Agronegocio">Agronegócios</label>
                <input
                  type="checkbox"
                  id="Saude"
                  value="Saude"
                  v-model="checkedField"
                />
                <label for="Saude">Saúde</label>
                <input
                  type="checkbox"
                  id="Outro"
                  value="Outro"
                  v-model="checkedField"
                />
                <label for="Outro">Outro</label>
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
                id="Facebook"
                value="Facebook"
                v-model="checkedSocial"
              />
              <label for="Facebook">Facebook</label>

              <input
                type="checkbox"
                id="Instagram"
                value="Instagram"
                v-model="checkedSocial"
              />
              <label for="Instagram">Instagram</label>

              <input
                type="checkbox"
                id="Linkedin"
                value="Linkedin"
                v-model="checkedSocial"
              />
              <label for="Linkedin">Linkedin</label>
              <input
                type="checkbox"
                id="Twitter"
                value="Twitter"
                v-model="checkedSocial"
              />
              <label for="Twitter">Twitter</label>
              <input
                type="checkbox"
                id="Nao_tenho_rede_social"
                value="Nao_tenho_rede_social"
                v-model="checkedSocial"
              />
              <label for="Nao_tenho_rede_social"
                >Minha empresa não tem redes sociais</label
              >
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
              <a
                @click="
                  add(
                    1,
                    'Você está ativo nas suas redes sociais ?',
                    'Sim, tenho interações diárias'
                  )
                "
              >
                Sim, tenho interações diárias
              </a>
              <a
                @click="
                  add(
                    2,
                    'Você está ativo nas suas redes sociais ?',
                    'Sim, tenho postagens semanais'
                  )
                "
              >
                Sim, tenho postagens semanais
              </a>
              <a
                @click="
                  add(
                    3,
                    'Você está ativo nas suas redes sociais ?',
                    'Não estou ativo atualmente'
                  )
                "
              >
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
                    'Sua empresa investe em gestão de tráfego pago?',
                    'Sim, tenho uma equipe interna que faz isso'
                  )
                "
              >
                Sim, tenho uma equipe interna que faz isso
              </a>
              <a
                @click="
                  add(
                    2,
                    'Sua empresa investe em gestão de tráfego pago?',
                    'Sim, tenho esse serviço terceirizado'
                  )
                "
              >
                Sim, tenho esse serviço terceirizado
              </a>
              <a
                @click="
                  add(
                    3,
                    'Sua empresa investe em gestão de tráfego pago?',
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
              <a
                @click="
                  add(
                    2,
                    'Quanto a sua empresa investe em tráfego pago ?',
                    'Menos de R$ 1.000,00'
                  )
                "
              >
                Menos de R$ 1.000,00
              </a>
              <a
                @click="
                  add(
                    2,
                    'Quanto a sua empresa investe em tráfego pago ?',
                    'Entre R$ 1.000,00 e R$ 2.000,00'
                  )
                "
              >
                Entre R$ 1.000,00 e R$ 2.000,00</a
              >
              <a
                @click="
                  add(
                    1,
                    'Quanto a sua empresa investe em tráfego pago ?',
                    'Acima de R$ 2.000,00'
                  )
                "
              >
                Acima de R$ 2.000,00
              </a>
              <a
                @click="
                  add(
                    3,
                    'Quanto a sua empresa investe em tráfego pago ?',
                    'Não invisto porque não sei como fazer'
                  )
                "
              >
                Não invisto porque não sei como fazer
              </a>
              <a
                @click="
                  add(
                    3,
                    'Quanto a sua empresa investe em tráfego pago ?',
                    'Não invisto porque não acredito'
                  )
                "
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
                  id="Links_Patrocinados"
                  value="Links_Patrocinados"
                  v-model="checkedKnowledge"
                />
                <label for="Links_Patrocinados">Links patrocinados</label>
                <input
                  type="checkbox"
                  id="Funil_de_email"
                  value="Funil_de_email"
                  v-model="checkedKnowledge"
                />
                <label for="Funil_de_email">Funil de email</label>

                <input
                  type="checkbox"
                  id="Inbound_Marketing"
                  value="Inbound_Marketing"
                  v-model="checkedKnowledge"
                />
                <label for="Inbound_Marketing">Inbound Marketing</label>

                <input
                  type="checkbox"
                  id="SEO"
                  value="SEO"
                  v-model="checkedKnowledge"
                />
                <label for="SEO">SEO</label>
                <input
                  type="checkbox"
                  id="Branding"
                  value="Branding"
                  v-model="checkedKnowledge"
                />
                <label for="Branding">Branding</label>
                <input
                  type="checkbox"
                  id="Sem_Conhecimento"
                  value="Sem_Conhecimento"
                  v-model="checkedKnowledge"
                />
                <label for="Sem_Conhecimento">Nenhum</label>
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
              <a
                @click="
                  add(
                    3,
                    'Quantos % do seu faturamento vem da internet hoje?',
                    'Menos de 10%'
                  )
                "
              >
                Menos de 10%
              </a>
              <a
                @click="
                  add(
                    2,
                    'Quantos % do seu faturamento vem da internet hoje?',
                    'Até 30%'
                  )
                "
              >
                Até 30%
              </a>
              <a
                @click="
                  add(
                    2,
                    'Quantos % do seu faturamento vem da internet hoje?',
                    'Até 50%'
                  )
                "
              >
                Até 50%
              </a>
              <a
                @click="
                  add(
                    1,
                    'Quantos % do seu faturamento vem da internet hoje?',
                    'Mais de 50%'
                  )
                "
              >
                Mais de 50%
              </a>
              <a
                @click="
                  add(
                    1,
                    'Quantos % do seu faturamento vem da internet hoje?',
                    '100%'
                  )
                "
              >
                100%
              </a>
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
                    'Seu site possui otimização e está atualizado?',
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
                    'Seu site possui otimização e está atualizado?',
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
                    'Seu site possui otimização e está atualizado?',
                    'Meu site tem mais de dois anos e possívelmente está desatualizado'
                  )
                "
              >
                Meu site tem mais de dois anos e possivelmente está
                desatualizado
              </a>
              <a
                @click="
                  add(
                    3,
                    'Seu site possui otimização e está atualizado?',
                    'Não possuo site atualmente'
                  )
                "
              >
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
                    'Na sua opinião, quais as principais dificuldades que você encontra na hora de incluir as ferramentas de marketing digital na sua estratégiacomercial?',
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
                    'Na sua opinião, quais as principais dificuldades que você encontra na hora de incluir as ferramentas de marketing digital na sua estratégiacomercial?',
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
                    'Na sua opinião, quais as principais dificuldades que você encontra na hora de incluir as ferramentas de marketing digital na sua estratégiacomercial?',
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
                    'Na sua opinião, quais as principais dificuldades que você encontra na hora de incluir as ferramentas de marketing digital na sua estratégiacomercial?',
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
                    'Na sua opinião, quais as principais dificuldades que você encontra na hora de incluir as ferramentas de marketing digital na sua estratégiacomercial?',
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
