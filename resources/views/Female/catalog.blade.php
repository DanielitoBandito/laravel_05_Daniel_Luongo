<x-layout>

    @foreach ($parfumes as $parfume)
    <x-card>
        <h2>{{$parfume['title']}}</h2>
        <img src="{{$parfume['img']}}" class="img" alt="{{$parfume['title']}}">
        <h3>{{$parfume['description']}}</h3>
        <p><a href="{{route('female.details', $parfume['id'] ) }}">Apri articolo</a></p>
    </x-card>
@endforeach



</x-layout>