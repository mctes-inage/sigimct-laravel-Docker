@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Painel Principal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class=" col-md-4 col-xl-4">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $contar_usuarios = User::count();
                                            @endphp

                                            <h2 class="text-right"><i class="fa fa-user f-left"></i><span>{{ $contar_usuarios}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" class="text-blue">VER MAIS</a></p>
                                        </div>
                                    </div>
                               </div>  {{-- .end div class=" col-md-4 col-xl-4 --}}
                               <div class=" col-md-4 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5>Perfil</h5>
                                        @php
                                            use Spatie\Permission\Models\Role;
                                            $contar_roles = Role::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{ $contar_roles}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/roles" class="text-blue">VER MAIS</a></p>
                                    </div>
                                </div>
                           </div>  {{-- .end div class=" col-md-4 col-xl-4 --}}
                               <div class=" col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5>Blogs</h5>
                                        @php
                                            use App\Models\Blog;
                                            $contar_blogs = Blog::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-blog fa-left"></i><span>{{  $contar_blogs}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/blogs" class="text-blue">VER MAIS</a></p>
                                    </div>
                                </div>
                           </div>  {{-- .end div class=" col-md-4 col-xl-4 --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

