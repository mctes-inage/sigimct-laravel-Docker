@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Adicionar Novo Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>!Prenche todos campos!</strong>
                                        @foreach ($errors->all() as $error)
                                            <span class="badge badge-danger">{{$error}}</span>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            @endif
                            <form action="{{ route('blogs.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="titulo">Titulo</label>
                                            <input type="text" name="titulo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-floating">
                                            <label for="conteudo">Conteudo</label>
                                            <textarea class="form-control" name="conteudo" style="height: 100px"></textarea>
                                            
                                        </div>
                                        <br>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Gravar</button>
                                </div>
                            </form>{{--.end form--}}
                        </div>{{--.end card-body--}}
                    </div>{{--.end card--}}
                </div>
             </div>  {{--.end row--}}
        </div>{{--.end section-body--}}
    </section>
@endsection

