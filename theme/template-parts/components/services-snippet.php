<section class="py-l switcher wrapper">
    <article class="stack">
        <h2>HOW CAN WE HELP?</h2>
        <p>Eli”s Heating and Air specializes in installation, repairs, and maintenance for electric, gas, dual-fuel, among other HVAC Units. Whether it's a new system or an emergency fix, we've got you covered.</p>
        <a href="" class="btn outline-2 outline-secondary">See all Services</a>
    </article>
    <ul class="grid">
        <?php
        for ($i = 0; $i < 4; $i++) {
            get_template_part("template-parts/components/service-item");
        }
        ?>
    </ul>
</section>