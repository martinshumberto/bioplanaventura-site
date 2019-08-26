@php
use App\Model\Comentarios;
@endphp

<div id="comments" class="comments-area">
                    <h3 class="comments-title">{{ $comentarios->sum() }} Comentários</h3>

                    <div class="ratings-board">
                    
                        <div class="ratings-board-rows">
                            <div class="ratings-board-row">
                                <span class="star-rating star-rating-5">
                                    <span class="star-rating-inner"></span>
                                </span>
                                <span class="star-count">(0)</span>
                                <div class="ratings-bar">
                                    <div class="ratings-bar-inner" style="width: 44.44%;"></div>
                                </div>
                            </div>

                            <div class="ratings-board-row">
                                <span class="star-rating star-rating-4">
                                    <span class="star-rating-inner"></span>
                                </span>
                                <span class="star-count">(0)</span>
                                <div class="ratings-bar">
                                    <div class="ratings-bar-inner" style="width: 33.33%;"></div>
                                </div>
                            </div>

                            <div class="ratings-board-row">
                                <span class="star-rating star-rating-3">
                                    <span class="star-rating-inner"></span>
                                </span>
                                <span class="star-count">(0)</span>
                                <div class="ratings-bar">
                                    <div class="ratings-bar-inner" style="width: 22.22%;"></div>
                                </div>
                            </div>

                            <div class="ratings-board-row">
                                <span class="star-rating star-rating-2">
                                    <span class="star-rating-inner"></span>
                                </span>
                                <span class="star-count">(0)</span>
                                <div class="ratings-bar">
                                    <div class="ratings-bar-inner" style="width: 0;"></div>
                                </div>
                            </div>

                            <div class="ratings-board-row">
                                <span class="star-rating star-rating-1">
                                    <span class="star-rating-inner"></span>
                                </span>
                                <span class="star-count">(0)</span>
                                <div class="ratings-bar">
                                    <div class="ratings-bar-inner" style="width: 0;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="ratings-board-score">
                            <span class="star-rating">
                                <span class="star-rating-inner" style="width: 86%;"></span>
                            </span>
                            <span class="ratings-score">0</span>
                            <span class="ratings-score-label">Excelente</span>
                        </div>
                    </div>

                    <ol class="comment-list">
            @foreach ($comentarios as $comentario)
                        <li class="comment even thread-even depth-1 parent bypostauthor">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                                        <b class="fn">{{ $comentario->author }} </b>
                                        <span class="says">diz:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <span class="star-rating star-rating-5">
                                            <span class="star-rating-inner"></span>
                                        </span>
                                        <a href="#">
                                            <time datetime="2007-09-04T10:49:03+00:00">
                                                 
                                            </time>
                                        </a>
                                        <span class="edit-link">
                                            <a class="comment-edit-link" href="#">Editar</a>
                                        </span>
                                    </div>
                                </footer>

                                <div class="comment-content">
                                    <p>{{ $comentario->comment }}</p>
                                </div>
                            </article>
                        </li>
            @endforeach
                    </ol>

                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">
                            Seu comentário
                        </h3>
                        {!! Form::model(null, ['route' => ['frontend-envia-comentario', $evento[0] -> slug], 'method' =>
                        'post', 'files' => true, 'class'=>'comment-form', 'id'=>'commentform']) !!} 
                            <p class="comment-notes">
                                <span id="email-notes">Seu endereço de e-mail não será publicado.</span>
                                Campos obrigatórios são marcados
                                <span class="required">*</span>
                            </p>

                            <p class="comment-form-star-rating">
                                <span class="label">Avalie esse evento clicando nas estrelas abaixo *</span>
                                <span class="star-rating-input">
                                    <input type="radio" class="star-rating-input" value="5" name="star_rating" id="star-rating-5">
                                    <label for="star-rating-5">
                                        <span>5 estrelas</span>
                                    </label>
                                    <input type="radio" class="star-rating-input" value="4" name="star_rating" id="star-rating-4">
                                    <label for="star-rating-4">
                                        <span>4 estrelas</span>
                                    </label>
                                    <input type="radio" class="star-rating-input" value="3" name="star_rating" id="star-rating-3">
                                    <label for="star-rating-3">
                                        <span>3 estrelas</span>
                                    </label>
                                    <input type="radio" class="star-rating-input" value="2" name="star_rating" id="star-rating-2">
                                    <label for="star-rating-2">
                                        <span>2 estrelas</span>
                                    </label>
                                    <input type="radio" class="star-rating-input" value="1" name="star_ratingg" id="star-rating-1">
                                    <label for="star-rating-1">
                                        <span>1 estrelas</span>
                                    </label>
                                </span>
                            </p>



                            <p class="comment-form-comment">
                                <label for="comment">Conte-nos sobre sua experiência</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                            </p>

                            <p class="comment-form-author">
                                <label for="author">Nome
                                    <span class="required">*</span>
                                </label>
                                <input id="author" name="author" type="text" required>
                            </p>

                            <p class="comment-form-email">
                                <label for="email">E-mail
                                    <span class="required">*</span>
                                </label>
                                <input id="email" name="email" type="email" required>
                            </p>

                            <p class="form-submit">
                                <button type="submit" class="submit">Comentar</button>
                            </p>
                        </form>
                    </div>
                </div>