<div class="top-bar-box">
    <div class="container">
        <div class="top-bar">
            <div class="page-info">DASHBOARD</div>
            {{-- <div class="top-side-box">
                <div class="notification-box">
                    <div class="notification-item">
                        <i class="icon mdi mdi-earth" aria-hidden="true"></i>
                        <div class="bullet"></div>
                        <div class="notification-content">
                            <div class="header">
                                <div class="title">Notificações</div>
                                <div class="action"> <a href="">Marcar tudo como lido</a> <a href="">Ver tudo</a> </div>
                            </div>
                            <div class="content">
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Sistema</span> Lorem ipsum dolor sit amet. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Humberto Martins</span> Lorem ipsum dolor sit amet. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Humberto Martins</span> Lorem ipsum dolor sit amet. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Humberto Martins</span> Lorem ipsum dolor sit amet. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Sistema</span> Lorem ipsum dolor sit amet. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                                <a href="javascript:;" class="item">
                                    <img src="images/profile-1.jpg" alt="Generic placeholder image">
                                    <div class="info">
                                        <div class="text"> <span class="highlight">Sistema</span> novo changelog lançado. </div>
                                        <div class="time">1 hora atrás</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="mobile-nav-toggle"> <i class="icon mdi mdi-menu" aria-hidden="true"></i> Menu </div>
            <div class="user-profile">
                {{-- <img class="user-image" src="images/profile-1.jpg" alt="Generic placeholder image"> --}}
                {!!img('profile-1.jpg', array("class" => "user-image"))!!}
                <div class="info">
                    <div class="user-name">{!!Auth::guard('admin')->user()->name!!}</div>
                    {{-- <div class="user-info">Administrator</div> --}}
                </div>
                <div class="user-profile-content">
                    <a href="javascript:;"> <i class="icon mdi mdi-settings" aria-hidden="true"></i> Configurações </a>
                    <a href="javascript:;"> <i class="icon mdi mdi-textbox-password" aria-hidden="true"></i> Alterar senha </a>
                    <a href="javascript:;"> <i class="icon mdi mdi-logout-variant" aria-hidden="true"></i> Sair </a>
                </div>
            </div>
        </div>
    </div>
</div>
