@extends ('layout')

@section ('cabecalho')
Séries
@endsection

@section ('conteudo')
        <a href="/series/create" class="btn btn-dark mb-2">Adicionar</a>
      
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item">
                    <?= $serie ?>
                </li>
            @endforeach
        </ul>

        <?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
echo $date;
?>
@endsection 