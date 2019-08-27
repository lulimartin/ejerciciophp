@if (empty($movies))
    <p>No hay Peliculas</p>
@else
  @foreach ($movies as $peliculas)
  <p>{{ $peliculas['titulo'] }}
    @if ($peliculas['rating'] >= 8)
      <strong>{{ 'recomendada' }}</strong>
    @endif
  </p>
  @endforeach
@endif
