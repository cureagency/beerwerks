
<?php if( have_rows('locations') ): ?>
    <div class="acf-map" data-zoom="16">
        <?php while ( have_rows('locations') ) : the_row();

            // Load sub field values.
            $location = get_sub_field('location');
            $title = get_sub_field('description');
            $description = get_sub_field('description');
            ?>
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><em><?php echo esc_html( $location['address'] ); ?></em></p>
                <p><?php echo esc_html( $description ); ?></p>
            </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
