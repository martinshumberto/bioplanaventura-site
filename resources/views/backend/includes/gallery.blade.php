<script src="{{asset('public/'.elixir('js/backend/libs/dropzone.js'))}}"></script>
 <link rel="stylesheet" href="{{asset('public/'.elixir('css/backend/libs/dropzone.css'))}}">
    

 {{ Form::hidden('chave', $chave) }}
                                <div class="form-group">
                                    <label for="titulo">Upload de Imagem</label>
                                    <input hidden id="file"/>

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

                                @foreach($fotos as $foto)
                                    <div class="fiel w-100 w-sm-46 w-md-30 w-xl-23 px-20 py-10 d-flex rounded position-relative">
                                        <div class="document fw-87 fh-80">
                                        {!!img('../storage/files/'.$foto->file, array("width"=>"70", "height"=>"70"))!!}
                                        </div>
                                        <div class="w-50 d-flex flex-column justify-content-center">
                                            <div class="file-name font-weight-normal"> </div>
                                            <div class="position-absolute post-10 posr-12" role="main" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                @endforeach
                                </div>
                                
    <script>
        Dropzone.options.fileUpload = {
            url: '/upfile',
            addRemoveLinks: true,
            uploadMultiple: true,
            parallelUploads: 100,
            accept: function(file) {
                let fileReader = new FileReader();
                console.log(file);
                fileReader.readAsDataURL(file);
                fileReader.onloadend = function() {

                    let content = fileReader.result;
                    $('#file').val(content);
                    file.previewElement.classList.add("dz-success");


                    $.ajax({
                        type: 'POST',
                        url: "{!!route('backend-upfiles')!!}",
                        data: {
                            'action': '{!! $action !!}',
                            'chave':'{!! $chave !!}',
                            'data': JSON.stringify(content)
                        },
                        success: function(data) {

                            // Success.

                        }
                    });
                }
                file.previewElement.classList.add("dz-complete");
            }
        }
    </script>  