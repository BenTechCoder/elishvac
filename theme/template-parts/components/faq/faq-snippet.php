<section class="py-xl-2xl wrapper switcher">
    <div class="stack">
        <h2><?php echo strtoupper("Let's Clear the Air"); ?></h2>
        <div class="flex gap-s">
            <a href="https://www.lebronconsulting.tech" class="btn outline-2 outline-secondary">Lebron Consulting</a>
            <a href="https://www.lebronconsulting.tech" class="btn outline-2 outline-tertiary">Lebron Consulting</a>
        </div>
    </div>
    <div class="stack">
        <?php

        get_template_part("template-parts/components/faq/faq", 'query', array(
            'faq_amount' => null
        ))

        ?>
    </div>
</section>