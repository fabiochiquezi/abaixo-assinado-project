<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Home</title>
    <link rel="stylesheet" href="{{ mix('css/dashboard/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark header-site">
        <div class="container">
            <a href="#" class="navbar-brand">Dashboard</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link ml-2">Tabela de Dados</a>
                    <a href="#" class="nav-item nav-link ml-2 active">Abaixo Assinado</a>
                </div>

                <a href="" class="ml-auto text-white button-sair">Sair</a>
            </div>
        </div>        
    </nav>

    <div class="jumbotron jumbotron-fluid title-standard">
        <div class="container">
            <h1 class="display-4">Abaixo Assinado</h1>
            <p class="lead">Sessão dedicada para editar a página do site.</p>
        </div>
    </div>

    <main class="content-site content-system-page">
        <div class="container">
            <div class="row">

                <div class="col-md-3 tab-header mb-4">
                    <div class="nav flex-md-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link col-6 col-md-12 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            Conteúdo Geral
                        </a>

                        <a class="nav-link col-6 col-md-12" id="v-pills-formulario-tab" data-toggle="pill" href="#v-pills-formulario" role="tab" aria-controls="v-pills-formulario" aria-selected="false">
                            Formulário
                        </a>

                        <a class="nav-link col-6 col-md-12" id="v-pills-conteudo-tab" data-toggle="pill" href="#v-pills-conteudo" role="tab" aria-controls="v-pills-conteudo" aria-selected="false">
                            Conteúdo
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form class="d-flex flex-column justify-content-end">

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Link:</label>
                                    <div class="col-sm-10">
                                        <span>/abaixo-assinado-em-prol-de-uma-causa</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome do abaixo-assinado">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Ativar</label>
                                    <div class="col-sm-10">
                                        <select name="" class="form-control" id="">
                                            <option value="">Deixar página ativa</option>
                                            <option value="">Deixar página desativa</option>
                                        </select>
                                    </div>
                                </div>

                                <a href="" class="btn btn-primary mt-3  align-self-end">Enviar</a>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-formulario" role="tabpanel" aria-labelledby="v-pills-formulario-tab">
                            <form class="d-flex flex-column justify-content-end col-12">

                                <div class="group-field">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Titulo</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="colFormLabel" placeholder="Digite um título p/ a página">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Subtítulo</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="colFormLabel" placeholder="Digite um título p/ a página">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile" data-browse="Selecionar um arquivo"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="group-field edit-form-system mb-4">
                                    <p class="mb-3">Insira os inputs que o formulário terá:</p>

                                    <ul>
                                        <li class="block-inputs d-flex justify-content-between">
                                            <div class="col-3">
                                                <label for="">Input:</label>
                                                <p>- Nome</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Tipo:</label>
                                                <p>Texto</p>
                                                {{-- <select class="form-control">
                                                    <option vale="0">Texto</option>
                                                    <option vale="1">Texto Simples</option>
                                                    <option vale="2">Número</option>
                                                    <option vale="3">Email</option>
                                                </select> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Placeholder:</label>
                                                <p>- Descrição</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o descritivo do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Ações:</label>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary mr-1">Editar</button>
                                                    <button class="btn btn-danger">Excluir</button>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="block-inputs d-flex justify-content-between">
                                            <div class="col-3">
                                                <label for="">Input:</label>
                                                <p>- Nome</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Tipo:</label>
                                                <p>Texto</p>
                                                {{-- <select class="form-control">
                                                    <option vale="0">Texto</option>
                                                    <option vale="1">Texto Simples</option>
                                                    <option vale="2">Número</option>
                                                    <option vale="3">Email</option>
                                                </select> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Placeholder:</label>
                                                <p>- Descrição</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o descritivo do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Ações:</label>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary mr-1">Editar</button>
                                                    <button class="btn btn-danger">Excluir</button>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="block-inputs d-flex justify-content-between">
                                            <div class="col-3">
                                                <label for="">Input:</label>
                                                <p>- Nome</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Tipo:</label>
                                                <p>Texto</p>
                                                {{-- <select class="form-control">
                                                    <option vale="0">Texto</option>
                                                    <option vale="1">Texto Simples</option>
                                                    <option vale="2">Número</option>
                                                    <option vale="3">Email</option>
                                                </select> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Placeholder:</label>
                                                <p>- Descrição</p>
                                                {{-- <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o descritivo do campo"> --}}
                                            </div>

                                            <div class="col-3">
                                                <label for="">Ações:</label>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary mr-1">Editar</button>
                                                    <button class="btn btn-danger">Excluir</button>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="block-inputs d-flex justify-content-between">
                                            <div class="form-group col-3">
                                                <label for="">Input:</label>
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome">
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Tipo:</label>
                                                <select class="form-control">
                                                    <option vale="null" disabled selected>Selecione</option>
                                                    <option vale="0">Texto</option>
                                                    <option vale="1">Texto Simples</option>
                                                    <option vale="2">Número</option>
                                                    <option vale="3">Email</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Placeholder:</label>
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o descritivo">
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Ações:</label>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary mr-1">Editar</button>
                                                    <button class="btn btn-danger">Excluir</button>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="block-inputs d-flex justify-content-between">
                                            <div class="form-group col-3">
                                                <label for="">Input:</label>
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome">
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Tipo:</label>
                                                <select class="form-control">
                                                    <option vale="null" disabled selected>Selecione</option>
                                                    <option vale="0">Texto</option>
                                                    <option vale="1">Texto Simples</option>
                                                    <option vale="2">Número</option>
                                                    <option vale="3">Email</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Placeholder:</label>
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o descritivo">
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="">Ações:</label>
                                                <div class="d-flex">
                                                    <button class="btn btn-primary mr-1">Editar</button>
                                                    <button class="btn btn-danger">Excluir</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-primary">Adicionar campo</a>
                                    <a href="" class="btn btn-success button-enviar">Enviar</a>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-conteudo" role="tabpanel" aria-labelledby="v-pills-conteudo-tab">
                            <form class="d-flex flex-column justify-content-end">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite um título p/ a página">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Conteúdo</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="Required example textarea" rows="4">Digite um texto p/ a página</textarea>
                                    </div>
                                </div>

                                <div class="form-group row align-items-end">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">WhatssApp</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite seu WhatsApp, ex: 19983127035">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Facebook">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Twitter">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Instagram">
                                    </div>
                                </div>

                                <a href="" class="btn btn-primary mt-3 align-self-end">Enviar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/bootstrap.bundle.js') }}"></script>
</body>
</html>