<form action="/mensagems/{{$mensagem->id}}" method="POST">
    @csrf
    @method('patch')
    @include('mensagens.partials.forms')
</form>


