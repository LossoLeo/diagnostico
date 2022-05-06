@component('mail::message')
    <p style="color: black">Nome - <b>{{ $candidate->name }}</b></p>
    <p style="color: black">Empresa - <b>{{ $candidate->company }}</b></p>
    <p style="color: black">Email - <b>{{ $candidate->email }}</b></p>
    <p style="color: black">Telefone - <b>{{ $candidate->phone }}</b></p>
    <p style="color: black">Solicitado em <b> {{ $candidate->created_at->format('d/m/Y') }} </b></p>
    <a style="position: relative;
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
    font-weight: 500;" href="https://api.whatsapp.com/send?phone={{$candidate->link}}">Iniciar Conversa por WhatsApp</a>
@endcomponent
