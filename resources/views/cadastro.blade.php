@extends('layouts.app')

<style>
    #panel{
        background-color: #9c89b8;
        border-radius: 5px;
    }
    #title{
        color: white;
        margin: 0;
    }
</style>
@section('content')
<div class="container">
    <div class="content">
        <div class="d-flex justify-content-cente">
            <div class="mx-auto">
                <div class="jumbotron jumbotron-fluid" id="panel">
                    <div class="container">
                        <h2 class="display-4" id="title">My Book List</h2>
                        </div>
                    </div>
                <div class="content-first">
                    <div class="row no-gutters bg-light position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="{{ url('/undraw_Reading_book_re_kqpk.svg') }}" class="w-100" alt="...">
                        </div>
                        <div class="col-md-6 position-static p-4 pl-md-0">
                            <form method="POST" action="/">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <input class="form-control" type="nome_livro" name="nome" placeholder="Livro">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="nome_autor" name="autor" placeholder="Autor">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="ano_publicacao" name="ano_de_publicacao" placeholder="Ano de Publicação">
                                    </div>
                                    <div class="col">
                                        <input class="btn btn-primary"type="submit" value="Salvar">
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
