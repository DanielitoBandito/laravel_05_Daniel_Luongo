<x-layout>

    @foreach ($parfumes as $parfume)
        @if ($current_id == $parfume['id'])
            <div class="article">
                <h2>{{$parfume['title']}}</h2>
                <img src="{{$parfume['img']}}"alt="{{$parfume['title']}}">
                <h3>{{$parfume['description']}}</h3>
            </div>
            
        @endif
    @endforeach

</x-layout>