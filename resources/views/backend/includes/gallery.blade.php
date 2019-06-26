<script src="{{asset(''.elixir('js/backend/libs/dropzone.js'))}}"></script>
 <link rel="stylesheet" href="{{asset(''.elixir('css/backend/libs/dropzone.css'))}}">
    

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