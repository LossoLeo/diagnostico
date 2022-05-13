@component('mail::message', ['user' => $user])
    <h2>Dados Pessoais 😀</h2>
    <p>Nome: {{ $user['name'] }}</p>
    <p>Email: {{ $user['email'] }}</p>
    <p>Empresa: {{ $user['company'] }}</p>
    <p>Telefone: {{ $user['phone'] }}</p>
    <br>
    <h2>Setor de atuação 💼:</h2>
    @foreach ($sector as $item)
        <p>- {{ $item }}</p>
    @endforeach
    <br>
    <h2>Presença em Rede Social 💻:</h2>
    @foreach ($socials as $i)
        <p>- {{ $i }}</p>
    @endforeach
    <br>
    <h2>Conhecimento em conceito 🧠:</h2>
    @foreach ($concept as $it)
        <p>- {{ $it }}</p>
    @endforeach
    <br>
    <h2>Questionário 📝</h2>
    @foreach ($questions as $ite)
        <h5>{{ $ite['question'] }}</h5>
        <p>R: {{ $ite['result'] }}</p>
    @endforeach
    <br>
    <div class="col" style="align-items: center">
        <a class="whats" href="https://api.whatsapp.com/send?phone={{ $link }}">Chamar no Whatsapp</a>
    </div>
@endcomponent

<style>
    .whats {
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
        background-color: #25D366;
        border-radius: 30px;
        font-weight: 500;
    }

</style>
