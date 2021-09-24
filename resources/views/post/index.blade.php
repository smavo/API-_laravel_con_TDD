@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div  style="padding: 20px 35px 10px 35px; display: flex; justify-content: space-between;">
                        <h4>Articulos</h4>
                        <a href="{{route('post.create')}}" class="btn btn-sm btn-outline-success" ><b> Crear </b></a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($posts as $post )
                             <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>
                                    <a href="{{ route('post.edit', $post)}}" class="btn btn-sm btn-outline-primary"  >
                                        Editar
                                    </a>
                                    <a href="{{ route('post.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="Eliminar" onclick="return confirm('Desea Eliminar')" class="btn btn-sm btn-outline-danger" >
                                    </a>
                                </td>
                              </tr>
                             @endforeach
                             
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
