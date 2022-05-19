<!--================ Start Header Menu Area =================-->
<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand logo_h" href="index"
							><img src="img/logo.png" alt="Logo" />
					</a><h5>ГРИБЫ <br>ОРЕХОВО-ЗУЕВСКОГО РАЙОНА</h5></br></h5>
						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
						<span class="navbar-toggler-icon"></span>
						</button>
						<div
							class="collapse navbar-collapse offset"
							id="navbarSupportedContent"
						>
							<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
								<li class="nav-item active">
									<a class="nav-link" href="index">Домой</a>
								</li>
								<li class="nav-item submenu dropdown">
									<a
										href="#"
										class="nav-link dropdown-toggle"
										data-toggle="dropdown"
										role="button"
										aria-haspopup="true"
										aria-expanded="false"
										>Галерея</a
									>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a class="nav-link" href="ed"
												>Съедобные грибы</a
											>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="in"
												>Несьедобные грибы</a
											>
										</li>
									</ul>
								</li>
								
								<li class="nav-item submenu dropdown">
									<a
										href="#"
										class="nav-link dropdown-toggle"
										data-toggle="dropdown"
										role="button"
										aria-haspopup="true"
										aria-expanded="false"
										>Пользователю</a
									>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a class="nav-link" href="auth">Вход</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="reg">Регистрация</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
</header>
<!--================ End Header Menu Area =================-->
<?php echo $content ?>
<!--================ Start footer Area  =================-->
<footer class="footer">
            <div class="footer-area">
                <div class="container">
                    <div class="row section_gap">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h5 class="footer_title">Быстрые ссылки</h5>
                                <ul class="list">
                                    <li><a href="index">Домой</a></li>
                                    <li><a href="reg">Регистрация</a></li>
                                    <li><a href="auth">Авторизация</a></li>

                                </ul>
                            </div>
                            <div class="single-footer-widget tp_widgets">
                                <h5 class="footer_title">Контакты</h5>
								<div class="ml-40">
									<a href="tel:+79265229192"><i class="fa-solid fa-phone"></i><span class="my_phone">+7 (926) 522-91-92</span></a>
								</div>
									<div class="ml-40">
									<a href="https://mail.google.com/"><i class="fa-solid fa-envelope"></i><span class="my_email">commandor1981@gmail.com</span></a>
								</div>   
                            </div>    
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-widget instafeed">
                                <ul class="list instafeed d-flex flex-wrap">
								<a href="https://yandex.ru/maps/?um=constructor%3A861bbce863fdff43aa4f6f719ef6389458ae1e6135f6e8c36ad1b03c65fb304b&amp;source=constructorStatic" target="_blank"><h5 class="footer_title">Карта грибных мест Орехово-Зуевского района</h5><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A861bbce863fdff43aa4f6f719ef6389458ae1e6135f6e8c36ad1b03c65fb304b&amp;width=600&amp;height=200&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                            </div>
						</div>
					</div>
				</div>
			</div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row d-flex">
                        <p class="col-lg-12 footer-text text-center">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved |  <i class="fa fa-heart" aria-hidden="true"></i>  <a href="" target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
</footer>
<!--================ End footer Area  =================-->