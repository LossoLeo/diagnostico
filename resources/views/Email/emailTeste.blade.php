@component('mail::message')
    <p>Nome - <b>{{ $candidate->name }}</b></p>
    <p>Empresa - <b>{{ $candidate->company }}</b></p>
    <p>Email - <b>{{ $candidate->email }}</b></p>
    <p>Telefone - <b>{{ $candidate->phone }}</b></p>

    A empresa está aguardando seu retorno!
@endcomponent
