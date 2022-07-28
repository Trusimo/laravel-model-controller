<h1>Elenco film</h1>

<ul>
    <li>
        @foreach ($movies as $film)
            <li><strong>{{ $film["title"] }}</strong></li>
        @endforeach
    </li>
</ul>