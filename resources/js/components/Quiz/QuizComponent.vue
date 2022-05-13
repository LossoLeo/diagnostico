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
              <div class="row">
                <input
                  type="checkbox"
                  id="site_e_dados_primeira_pagina"
                  value="site_e_dados_primeira_pagina"
                  v-model="answers"
                  @click="add(1, 'Site e dados na primeira pagina')"
                />
                <label for="site_e_dados_primeira_pagina"
                  >Seu site e dados na primeira página do Google</label
                >
                <input
                  type="checkbox"
                  id="dados_basicos"
                  value="dados_basicos"
                  v-model="answers"
                  @click="add(2, 'Apenas os dados basicos da empresa')"
                />
                <label for="dados_basicos"
                  >Apenas os dados básicos, endereços, telefone, horário de
                  funcionamento da sua empresa</label
                >
                <input
                  type="checkbox"
                  id="apenas_redes_sociais"
                  value="apenas_redes_sociais"
                  v-model="answers"
                  @click="add(2, 'Apenas as redes sociais')"
                />
                <label for="apenas_redes_sociais"
                  >Apenas as redes sociais do seu negócio</label
                >
                <input
                  type="checkbox"
                  id="concorrentes_antes"
                  value="concorrentes_antes"
                  v-model="answers"
                  @click="add(3, 'Seus concorrentes nas primeiras posicoes')"
                />
                <label for="concorrentes_antes"
                  >Seus concorrentes nas primeiras posições</label
                >
                <input
                  type="checkbox"
                  id="nao_aparece_google"
                  value="nao_aparece_google"
                  v-model="answers"
                  @click="add(3, 'Sua empresa nao aparece no Google')"
                />
                <label for="nao_aparece_google"
                  >Sua empresa não aparece no Google</label
                >
              </div>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="funil_24horas"
                  value="funil_24horas"
                  v-model="answers"
                  @click="
                    add(1, 'Sim, possuo um funil trabalhando 24 horas por dia')
                  "
                />
                <label for="funil_24horas"
                  >Sim, possuo um funil trabalhando 24 horas por dia</label
                >
                <input
                  type="checkbox"
                  id="nao_mas_quero"
                  value="nao_mas_quero"
                  v-model="answers"
                  @click="
                    add(
                      2,
                      'Nao, mas pretendo implementar um processo comercial utilizando a internet nos proximos meses'
                    )
                  "
                />
                <label for="nao_mas_quero"
                  >Não, mas pretendo implementar um processo comercial
                  utilizando a internet nos próximos meses</label
                >
                <input
                  type="checkbox"
                  id="nao_vejo_necessidade"
                  value="nao_vejo_necessidade"
                  v-model="answers"
                  @click="add(3, 'Nao vejo necessidade')"
                />
                <label for="nao_vejo_necessidade"
                  >Não vejo necessidade atualmente</label
                >
                <input
                  type="checkbox"
                  id="oque_e_funil"
                  value="oque_e_funil"
                  v-model="answers"
                  @click="add(3, 'O que e um funil de vendas')"
                />
                <label for="oque_e_funil">O que é um funil de vendas? </label>
              </div>
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
                  id="varejo_fisico"
                  value="varejo_fisico"
                  v-model="answers"
                />
                <label for="varejo_fisico">Varejo Físico</label>

                <input
                  type="checkbox"
                  id="varejo_digital"
                  value="varejo_digital"
                  v-model="answers"
                />
                <label for="varejo_digital">Varejo Digital</label>

                <input
                  type="checkbox"
                  id="tecnologia"
                  value="tecnologia"
                  v-model="answers"
                />
                <label for="tecnologia">Tecnologia</label>
                <input
                  type="checkbox"
                  id="prestador_de_servico"
                  value="prestador_de_servico"
                  v-model="answers"
                />
                <label for="prestador_de_servico">Prestadora de Serviços</label>
                <input
                  type="checkbox"
                  id="industria"
                  value="industria"
                  v-model="answers"
                />
                <label for="industria">Indústria</label>
                <input
                  type="checkbox"
                  id="agronegocios"
                  value="agronegocios"
                  v-model="answers"
                />
                <label for="agronegocios">Agronegócios</label>
                <input
                  type="checkbox"
                  id="saude"
                  value="saude"
                  v-model="answers"
                />
                <label for="saude">Saúde</label>
                <input
                  type="checkbox"
                  id="outro"
                  value="outro"
                  v-model="answers"
                />
                <label for="outro">Outro</label>
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
                v-model="answers"
              />
              <label for="Facebook">Facebook</label>

              <input
                type="checkbox"
                id="Instagram"
                value="Instagram"
                v-model="answers"
              />
              <label for="Instagram">Instagram</label>

              <input
                type="checkbox"
                id="Linkedin"
                value="Linkedin"
                v-model="answers"
              />
              <label for="Linkedin">Linkedin</label>
              <input
                type="checkbox"
                id="Twitter"
                value="Twitter"
                v-model="answers"
              />
              <label for="Twitter">Twitter</label>
              <input
                type="checkbox"
                id="sem_rede_social"
                value="sem_rede_social"
                v-model="answers"
              />
              <label for="sem_rede_social"
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
              <div class="row">
                <input
                  type="checkbox"
                  id="interacoes_diarias"
                  value="interacoes_diarias"
                  v-model="answers"
                  @click="add(1, 'Sim, tenho interacoes diárias')"
                />
                <label for="interacoes_diarias"
                  >Sim, tenho interações diárias</label
                >
                <input
                  type="checkbox"
                  id="interacoes_semanais"
                  value="interacoes_semanais"
                  v-model="answers"
                  @click="add(2, 'Sim, tenho interacoes diárias')"
                />
                <label for="interacoes_semanais"
                  >Sim, tenho postagens semanais</label
                >
                <input
                  type="checkbox"
                  id="sem_interacoes"
                  value="sem_interacoes"
                  v-model="answers"
                  @click="add(3, 'Nao estou ativo atualmente')"
                />
                <label for="sem_interacoes">Não estou ativo atualmente</label>
              </div>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="equipe_interna"
                  value="equipe_interna"
                  v-model="answers"
                  @click="add(1, 'Sim, tenho uma equipe interna que faz isso')"
                />
                <label for="equipe_interna"
                  >Sim, tenho uma equipe interna que faz isso</label
                >
                <input
                  type="checkbox"
                  id="equipe_terceirizada"
                  value="equipe_terceirizada"
                  v-model="answers"
                  @click="add(2, 'Sim, tenho esse serviço terceirizado')"
                />
                <label for="equipe_terceirizada"
                  >Sim, tenho esse serviço terceirizado</label
                >
                <input
                  type="checkbox"
                  id="sem_equipe"
                  value="sem_equipe"
                  v-model="answers"
                  @click="add(3, 'Não, nunca vi nem comi, só ouço falar')"
                />
                <label for="sem_equipe"
                  >Não, nunca vi nem comi, só ouço falar</label
                >
              </div>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="menos_de_1000"
                  value="menos_de_1000"
                  v-model="answers"
                  @click="add(2, 'Menos de R$ 1.000,00')"
                />
                <label for="menos_de_1000">Menos de R$ 1.000,00</label>
                <input
                  type="checkbox"
                  id="entre_1000_e_2000"
                  value="entre_1000_e_2000"
                  v-model="answers"
                  @click="add(2, 'Menos de R$ 1.000,00')"
                />
                <label for="entre_1000_e_2000"
                  >Entre R$ 1.000,00 e R$ 2.000,00</label
                >
                <input
                  type="checkbox"
                  id="acima_de_2000"
                  value="acima_de_2000"
                  v-model="answers"
                  @click="add(1, 'Menos de R$ 1.000,00')"
                />
                <label for="acima_de_2000">Acima de R$ 2.000,00</label>
                <input
                  type="checkbox"
                  id="nao_sei_fazer"
                  value="nao_sei_fazer"
                  v-model="answers"
                  @click="add(3, 'Não invisto porque não sei como fazer')"
                />
                <label for="nao_sei_fazer"
                  >Não invisto porque não sei como fazer</label
                >
                <input
                  type="checkbox"
                  id="nao_acredito"
                  value="nao_acredito"
                  v-model="answers"
                  @click="add(3, 'Não invisto porque não acredito')"
                />
                <label for="nao_acredito"
                  >Não invisto porque não acredito</label
                >
              </div>
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
                  v-model="answers"
                />
                <label for="Links_Patrocinados">Links patrocinados</label>
                <input
                  type="checkbox"
                  id="Funil_Email"
                  value="Funil_Email"
                  v-model="answers"
                />
                <label for="Funil_Email">Funil de email</label>

                <input
                  type="checkbox"
                  id="Marketing"
                  value="Marketing"
                  v-model="answers"
                />
                <label for="Marketing">Inbound Marketing</label>

                <input
                  type="checkbox"
                  id="SEO"
                  value="SEO"
                  v-model="answers"
                />
                <label for="SEO">SEO</label>
                <input
                  type="checkbox"
                  id="Branding"
                  value="Branding"
                  v-model="answers"
                />
                <label for="Branding">Branding</label>
                <input
                  type="checkbox"
                  id="Nenhum"
                  value="Nenhum"
                  v-model="answers"
                />
                <label for="Nenhum">Nenhum</label>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="menos_de_10"
                  value="menos_de_10"
                  v-model="answers"
                  @click="add(3, 'Menos de 10%')"
                />
                <label for="menos_de_10">Menos de 10%</label>
                <input
                  type="checkbox"
                  id="ate_30"
                  value="ate_30"
                  v-model="answers"
                  @click="add(2, 'Até 30%')"
                />
                <label for="ate_30">Até 30%</label>
                <input
                  type="checkbox"
                  id="ate_50"
                  value="ate_50"
                  v-model="answers"
                  @click="add(2, 'Até 50%')"
                />
                <label for="ate_50">Até 50%</label>
                <input
                  type="checkbox"
                  id="mais_de_50"
                  value="mais_de_50"
                  v-model="answers"
                  @click="add(1, 'Mais de 50%')"
                />
                <label for="mais_de_50">Mais de 50%</label>
                <input
                  type="checkbox"
                  id="100"
                  value="100"
                  v-model="answers"
                  @click="add(1, '100%')"
                />
                <label for="100">100%</label>
              </div>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="sim_site_otimizado"
                  value="sim_site_otimizado"
                  v-model="answers"
                  @click="
                    add(1, 'Sim, meu site tem menos de um ano e está otimizado')
                  "
                />
                <label for="sim_site_otimizado"
                  >Sim, meu site tem menos de um ano e está otimizado</label
                >
                <input
                  type="checkbox"
                  id="site_mais_de_2_anos"
                  value="site_mais_de_2_anos"
                  v-model="answers"
                  @click="
                    add(
                      2,
                      'Acredito que sim, mas meu site já tem mais de dois anos'
                    )
                  "
                />
                <label for="site_mais_de_2_anos"
                  >Acredito que sim, mas meu site já tem mais de dois
                  anos</label
                >
                <input
                  type="checkbox"
                  id="site_mais_de_2_anos_desatualizado"
                  value="site_mais_de_2_anos_desatualizado"
                  v-model="answers"
                  @click="
                    add(
                      2,
                      'Meu site tem mais de dois anos e possivelmente está desatualizado'
                    )
                  "
                />
                <label for="site_mais_de_2_anos_desatualizado"
                  >Meu site tem mais de dois anos e possivelmente está
                  desatualizado</label
                >
                <input
                  type="checkbox"
                  id="nao_tenho_site"
                  value="nao_tenho_site"
                  v-model="answers"
                  @click="add(3, 'Não possuo site atualmente')"
                />
                <label for="nao_tenho_site">Não possuo site atualmente</label>
              </div>
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
              <div class="row">
                <input
                  type="checkbox"
                  id="sem_tempo"
                  value="sem_tempo"
                  v-model="answers"
                  @click="
                    generateReport(
                      0.5,
                      'Eu não tenho tempo, e acabo perdendo dinheiro por não implementar nada'
                    )
                  "
                />
                <label for="sem_tempo"
                  >Eu não tenho tempo, e acabo perdendo dinheiro por não
                  implementar nada</label
                >
                <input
                  type="checkbox"
                  id="sem_mao_de_obra"
                  value="sem_mao_de_obra"
                  v-model="answers"
                  @click="
                    generateReport(
                      0.5,
                      'Não encontro mão de obra especializada.'
                    )
                  "
                />
                <label for="sem_mao_de_obra"
                  >Não encontro mão de obra especializada.</label
                >
                <input
                  type="checkbox"
                  id="nao_preciso_vender_mais"
                  value="nao_preciso_vender_mais"
                  v-model="answers"
                  @click="
                    generateReport(0.6, 'Não preciso vender mais pela internet')
                  "
                />
                <label for="nao_preciso_vender_mais"
                  >Não preciso vender mais pela internet</label
                >
                <input
                  type="checkbox"
                  id="nao_preciso_vender_mais"
                  value="nao_preciso_vender_mais"
                  v-model="answers"
                  @click="
                    generateReport(
                      0.6,
                      'Não tenho dificuldades, estou ganhando dinheiro utilizando o marketing como estratégia comercial'
                    )
                  "
                />
                <label for="nao_preciso_vender_mais">
                  Não tenho dificuldades, estou ganhando dinheiro utilizando o
                  marketing como parte da minha estratégia comercial</label
                >
                <input
                  type="checkbox"
                  id="sem_dinheiro_para_investir"
                  value="sem_dinheiro_para_investir"
                  v-model="answers"
                  @click="
                    generateReport(
                      0.8,
                      'Não disponho de verba voltada para investir em marketing e vendas'
                    )
                  "
                />
                <label for="sem_dinheiro_para_investir">
                  Não disponho de verba voltada para investir em marketing e
                  vendas</label
                >
              </div>
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
      answers: [],
    };
  },
  methods: {
    generateReport: function (value, option) {
      this.$swal({
        type: "success",
        icon: "info",
        title: "Obrigado por responder nossas perguntas.",
        text: "Aguarde enquanto seu relatório está sendo gerado",
        showConfirmButton: false,
      }).then(this.add(value, option));
    },
    add(value, option) {
      let payload = {
        answers: this.answers,
        sum: this.sum,
      };

      if (this.activeStep < 11) {
        this.activeStep = this.activeStep + 1;
        this.answers.push({
          event: option,
        });
        this.sum += value;
      } else {
        if (this.sum > 0 || this.sum <= 10) {
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

      axios.post("/register-quiz", payload);
    },
    remove() {
      this.activeStep = this.activeStep - 1;
    },
  },
};
</script>
