<div class="yc-headline-container">

    <?php if ( !empty( $yc_headline ) ) : ?>
        <span class="yc-headline">
            <<?php echo $headline_tag ?>><?php echo $yc_headline ?></<?php echo $headline_tag ?>>
        </span>
    <?php endif; ?>

    <?php if ( $yc_has_divider ) : ?>
        <div class="decoration">
            <div class="decoration-inside"></div>
        </div>
    <?php endif; ?>

    <?php if ( !empty( $yc_sub_headline ) ) : ?>
        <span class="yc-sub-headline">
            <<?php echo $sub_headline_tag ?>><?php echo $yc_sub_headline ?></<?php echo $sub_headline_tag ?>>
        </span>
    <?php endif; ?>

</div>