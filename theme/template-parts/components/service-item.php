<li class="service__item card stack justify-center">
    <a href="<?php echo get_permalink(); ?>" class="center">
        <?php
        if ($args['icon']) {
        ?>

            <img src="<?php
                        echo esc_url(wp_get_attachment_url($args['icon']));
                        ?>" alt="<?php echo $args['service_name']; ?> Icon">

        <?php
        }
        ?>
        <h3 class="underline"><?php echo strtoupper($args['service_name']); ?></h3>
    </a>
</li>