<li class="card stack">
    <div>
        <div class="stars" style="--rating:<?php echo $args["stars"] ?>;" aria-label="This review is a rating of <?php echo $args["stars"] ?> stars out of 5."></div>
        <h3><?php echo $args["name"]; ?></h3>
        <?php echo $args["quote"] ?></p>
    </div>
    <a href=" <?php echo $args["link"] ?>">View Reveiw</a>
</li>