<?php
    get_header();
    $template_dir = get_stylesheet_directory_uri();
?>

<body>
    <?php
    require_once "menu.php";
    ?>

    <div class="container presentation">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-6">
                <h4>👋<span>Hello</span></h4>
                <h1>I'm <span>Full Stack</span></h1>
                <p>Passionate about new challenges.</p>

                <a target="_blank" href="<?php echo get_field('url_instagram', 13); ?>" class="btn btn-light"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="<?php echo get_field('url_whatsapp', 13); ?>" class="btn btn-light"><i class="bi bi-whatsapp"></i></a>
                <a target="_blank" href="<?php echo get_field('url_linkedin', 13); ?>" class="btn btn-light"><i class="bi bi-linkedin"></i></a>
                <a target="_blank" href="<?php echo get_field('url_github', 13); ?>" class="btn btn-light"><i class="bi bi-github"></i></a>

                <a target="_blank" href="<?php echo get_field('cv_url', 13); ?>" class="btn btn-primary">Download CV</a>

            </div>
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid" src="<?php echo get_field('foto_perfil', 13)['url']; ?>">

            </div>
        </div>
    </div>

    <div class="container">
        <h2>Education 📚</h2>

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bacharelado,
                            Sistemas de Informação</h4>
                        <p class="card-text">2022 - 2026</p>
                        <h5 class="card-title">FAESA</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container skills">
        <h2>Hard Skill 🔥</h2>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <h4>Front-end</h4>
                <ul class="list-group">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JS</li>
                    <li>Bootstrap</li>
                    <li>Figma</li>
                    <li>Aprendendo ReactJS</li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-3">
                <h4>Back-end</h4>
                <ul class="list-group">
                    <li>PHP</li>
                    <li>Wordpress</li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-3">
                <h4>Banco</h4>
                <ul class="list-group">
                    <li>MySQL</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container skills">
        <h2>Soft Skill 😄</h2>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="list-group">
                    <li>#Comunicativa</li>
                    <li>#Comprometimento</li>
                    <li>#Facilidade de aprendizado</li>
                    <li>#Responsável</li>
                    <li>#Empático</li>
                    <li>#Humilde</li>
                    <li>#Atitude de dono</li>
                    <li>#Trabalho em equipe</li>
                    <li>#Criatividade</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container skills">
        <h2>Contato </h2>

        <div class="row presentation">
            <div class="col-sm-12 col-md-3">
                <ul class="list-group">
                    <li class="mb-2"><a href="#" class="btn btn-light"><i class="bi bi-geo-alt"></i> Fundão - ES </a>
                    </li>
                    <li class="mb-2"><a href="#" class="btn btn-light"><i class="bi bi-phone"></i> (27) 99720-6738 </a>
                    </li>
                    <li class="mb-2"><a href="#" class="btn btn-light"><i class="bi bi-envelope"></i> micareges@gmail.com </a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>