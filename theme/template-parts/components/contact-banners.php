<?php
$phone_number = get_option("business_details_phone_number");
$email = get_option("business_details_business_email");
?>
<section class="uppercase font-display text-step-3 md:text-step-4 lg:text-step-5 2xl:text-step-6 break-words">
    <div class="py-m-l bg-secondary text-background">
        <p class="wrapper text-center">Call <a href="tel:<?php echo $phone_number; ?>"><?php echo strtoupper($phone_number); ?></a> or <a href="/contact" class="btn bg-tertiary text-step-1">Contact us</a></p>
    </div>
    <div class="py-m-l bg-tertiary text-background text-center">
        <a href="mailto:<?php echo $email; ?>"><?php echo strtoupper($email); ?></a>
    </div>
</section>