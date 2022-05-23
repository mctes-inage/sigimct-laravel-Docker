@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('criar-blog')
                              <a class="btn btn-warning" href="{{route('blogs.create') }}">Novo</a>  
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">Titulo</th>
                                    <th style="color: #fff;">Conteudo</th>
                                    <th style="color: #fff;">Ação</th>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td style="display: none;">{{ $blog->id}}</td>
                                            <td>{{ $blog->titulo }}</td>
                                            <td>{{ $blog->conteudo }}</td>
                                             <td> 
                                                 <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                    @can('editar-blog')
                                                    <a class="btn btn-primary" href="{{route('blogs.edit', $blog->id) }}">Editar</a>  
                                                    @endcan

                                                   @csrf
                                                   @method('DELETE')
                                                    @can('deletar-blog')
                                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                                     @endcan 
                                                </form>
                                            </td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- CRIAMOS A PAGINACAO --}}
                            <div class="pagination justify-content-end">
                                {!! $blogs->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

