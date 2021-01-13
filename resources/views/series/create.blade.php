@extends ('layout')

@section ('cabecalho')
Adicionar Séries
@endsection

@section ('conteudo')
    <form action="" method="post">
        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <button class="btn btn-primary">Adicionar</button>    
    </form>
@endsection