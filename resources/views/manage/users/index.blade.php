@extends('layouts.admin')

@section('title', 'Usuários')

@section('content')
    <div class="header-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                    <a href="#" class="btn-voltar" onclick="window.history.go(-1)">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
                    </a>
                    <h1>Usuários</h1>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="#"
                        class="btn btn-primary">Adicionar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @include('manage.users.table')
        </div>
    </div>
@endsection

