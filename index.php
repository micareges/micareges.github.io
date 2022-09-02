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

        <?php 
        $rows = get_field('educacao', 13);
        ?>

        <div class="row">

        <?php

        if ( $rows ) {
        ?>
            <?php
                foreach( $rows as $row ) {
                ?>
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo  $row['nome_do_curso'] ?></h4>
                            <p class="card-text"><?php echo  $row['ano_do_curso'] ?></p>
                            <h5 class="card-title"><?php echo  $row['nome_da_instituicao'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php
                }
            ?>
           <?php
        }   
        ?>
        </div>
    </div>

    <div class="container">
        <h2>Projects</h2>
        <div class="row">
            <?php 
            $images = get_field('img_projetos', 13);
            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <div class="col-sm-12 col-md-6 mt-3">
                        <img class="img-fluid rounded" src="<?php echo esc_url($image['sizes']['large']); ?>">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            
        </div>
    </div>

    <div class="container skills">
        <h2>Hard Skill 🔥</h2>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <h4>Front-end</h4>

                <?php 
                    $rows = get_field('front-end', 13);
                ?>
                
                <?php
                
                if ( $rows ) {
                ?>
                <ul class="list-group">
                    <?php
                        foreach( $rows as $row ) {
                        ?>
                            <li><?php echo  $row['habilidade'] ?></li>
                        <?php
                        }
                    ?>
                </ul>
                <?php
                }   
                ?>
            </div>

            <div class="col-sm-12 col-md-3">
                <h4>Back-end</h4>
                
                <?php 
                    $rows = get_field('backend', 13);
                ?>
                
                <?php
                
                if ( $rows ) {
                ?>
                <ul class="list-group">
                    <?php
                        foreach( $rows as $row ) {
                        ?>
                            <li><?php echo  $row['habiliade'] ?></li>
                        <?php
                        }
                    ?>
                </ul>
                <?php
                }   
                ?>
            </div>

            <div class="col-sm-12 col-md-3">
                <h4>Banco</h4>
                <?php 
                        $rows = get_field('banco_de_dados', 13);
                    ?>
                    
                    <?php
                    
                    if ( $rows ) {
                    ?>
                    <ul class="list-group">
                        <?php
                            foreach( $rows as $row ) {
                            ?>
                                <li><?php echo  $row['habilidade'] ?></li>
                            <?php
                            }
                        ?>
                    </ul>
                    <?php
                    }   
                    ?>
            </div>

        </div>
        <div class="col-sm-12 col-md-3">
                <h2>Soft Skill 😄</h2>
                <?php 
                        $rows = get_field('soft_skill', 13);
                    ?>
                    
                    <?php
                    
                    if ( $rows ) {
                    ?>
                    <ul class="list-group">
                        <?php
                            foreach( $rows as $row ) {
                            ?>
                                <li><?php echo  $row['habilidade'] ?></li>
                            <?php
                            }
                        ?>
                    </ul>
                    <?php
                    }   
                    ?>
            </div>
    </div>


    <div class="container skills">
        <h2>Contato </h2>

        <div class="row presentation">
            <div class="col-sm-12 col-md-3">
                <ul class="list-group">
                    <li target="_blank" class="mb-2"><a href="<?php echo get_field('localizacao', 13);?>" class="btn btn-light"><i class="bi bi-geo-alt"></i> Fundão - ES </a>
                    </li>
                    <li class="mb-2"><a href="<?php echo get_field('celular', 13);?>" class="btn btn-light"><i class="bi bi-phone"></i> (27) 99720-6738 </a>
                    </li>
                    <li class="mb-2"><a href="<?php echo get_field('email', 13);?>" class="btn btn-light"><i class="bi bi-envelope"></i> micareges@gmail.com </a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>