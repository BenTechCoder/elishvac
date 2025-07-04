<li class="service__item card stack justify-center intersect-once intersect:motion-translate-y-in-100">
    <a href="<?php echo get_permalink(); ?>" class="center text-center">
        <?php
        if ($args['icon']) {
        ?>

            <img src="<?php
                        echo esc_url(wp_get_attachment_url($args['icon']));
                        ?>" alt="<?php echo $args['service_name']; ?> Icon" class="icon" style="--icon-size: 8ex;">

        <?php
        }
        ?>
        <h3 class="underline highlight"><?php echo strtoupper($args['service_name']); ?> <?php get_template_part("template-parts/components/highlight"); ?></h3>
    </a>
</li>