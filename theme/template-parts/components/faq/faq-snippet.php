<section class="py-xl-2xl wrapper switcher items-center intersect:motion-preset-fade">
    <div class="stack">
        <h2><?php echo strtoupper("Let's Clear the Air"); ?></h2>
        <div class="flex gap-s">
            <a href="/faq/" class="btn outline-2 outline-secondary">See all FAQs</a>
            <a href="/services/" class="btn outline-2 outline-tertiary">See all Services</a>
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