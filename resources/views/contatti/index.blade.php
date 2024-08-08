<x-layout>
    <x-nav/>

    <form action="{{route('contatti.submit')}}" method="POST">
        @csrf
        <input type="text" class="form-control" name="nome_cognome" placeholder="Nome e Cognome">
        <input type="text"class="form-control" name="email" placeholder="es@gmail.com">
        <input type="text" class="form-control"  name="company" placeholder="company">
        <textarea class="form-control" name="messaggio" cols="30" rows="10" placeholder="Messaggio"></textarea>
        <input class="btn btn-primary" type="submit" value="Invia">
    </form>

</x-layout>