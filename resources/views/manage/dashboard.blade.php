@extends('layouts.admin')

@section('title', 'Controle de Acesso')

@section('content')


    <div class="header-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="btn-voltar" onclick="window.history.go(-1)">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
                    </a>
                    <h1>Controle de Acessos</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">

        <div class="col-xl-4 col-sm-4 mb-4">
            <div class="card">
                <div class="card-header text-left">
                    <strong>Gerenciar Usuários</strong>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-block btn-secondary text-center">
                        Usuários
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-4 mb-4">
            <div class="card">
                <div class="card-header text-left">
                    <strong>Gerenciar Perfis</strong>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-block btn-secondary text-center">
                        Perfis
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-4 mb-4">
            <div class="card">
                <div class="card-header text-left">
                    <strong>Gerenciar Permisssões</strong>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-block btn-secondary text-center">
                        Permissões
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
