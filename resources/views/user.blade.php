@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="float-left">Usuarios</div>
            @include('ventanas.create')
        </div>      
        <div class="card-body">
            <div class="container">
                @if(session('flash'))
                    <div class="alert alert-success" role="alert">
                        <strong>Aviso : </strong> {{session('flash')}}
                        <button type="button" class="close" data-dismiss="alert" alert-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rol }}</td>
                        <td>
                            <!--<a href="{{ url('users/' . $user->id) }}" class="btn btn-sm btn-warning">Ver</a>-->
                            
                            @include('ventanas.edit')
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#eliminarUsuario{{$user->id}}">
                            Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="eliminarUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('users.destroy', $user)}}" method="POST">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <p>Esta Seguro de Eliminar a: {{$user->name}}</p>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                        <button type="submit" class="btn btn-danger">SI</button>  
                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
                                </div>
                            </div>
                            </div>




                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
