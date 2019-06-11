@extends('backend.layout._header')

@section('content')
<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">Sobre Nós</div>
                </div>
                <div class="px-20 pb-20">
                    <form>
                        <div class="form-group">
                            <label for="titulo">Título <code>*</code></label>
                            <input type="text" class="form-control" id="titulo" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="subtitulo">Sub-Título</label>
                            <input type="text" class="form-control" id="subtitulo" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="subtitulo">Conteúdo <code>*</code></label>
                            <textarea name="content" id="editor"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Upload de Imagem</label>
                            <input hidden id="file" name="file" />

                            <!-- You can add extra form fields here -->

                            <div class="dropzone dropzone-file-area" id="fileUpload">
                                <div class="dz-default dz-message">
                                    <h3 class="sbold">Solte arquivos aqui para fazer o upload</h3>
                                    <span>Você também pode clicar para abrir o navegador de arquivos</span>
                                </div>
                            </div>
                        </div>
                        <label for="titulo">Galeria de Imagem</label>
                        <div class="file-list d-flex flex-wrap mt-15">
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #1</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.PNG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #2</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #3</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #4</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #5</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #6</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="file w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                <div class="document fw-87 fh-80">
                                    <div class="file-type">.JPG</div>
                                </div>
                                <div class="w-50 d-flex flex-column justify-content-center">
                                    <div class="file-name font-weight-normal">Foto #7</div>
                                    <div class="mt-3">04/05/2019</div>
                                    <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi mdi-dots-vertical text-size-18" aria-hidden="true"></i>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Compartilhar</a>
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Renomear</a>
                                            <a class="dropdown-item" href="#">Inativar</a>
                                            <a class="dropdown-item" href="#">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="titulo">Status <code>*</code></label>
                            <select class="custom-select mb-10">
                                <option selected="" disabled="">Selecione</option>
                                <option value="1">Ativo</option>
                                <option value="2">Inátivo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn d-block mb-5 btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
