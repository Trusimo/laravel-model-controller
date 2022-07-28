<h1>Elenco film</h1>
    <div class="flex">
        @foreach ($movies as $movie)
            <div><strong>{{ $movie["title"] }}</strong> - {{ $movie["original_title"] }} - Voto: {{ $movie["vote"] }}</div>
        @endforeach
    </div>

