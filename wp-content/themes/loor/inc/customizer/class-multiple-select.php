<?php

/**
 * Multiple select customize control class.
 */
if( class_exists( 'WP_Customize_Control' ) ) {
    class Loor_Control_Multiple_Select extends WP_Customize_Control {

        /**
         * The type of customize control being rendered.
         */
        public $type = 'multiple-select';

        /**
         * Displays the multiple select on the customize screen.
         */
        public function render_content() {

        if ( empty( $this->choices ) )
            return;
        ?>
            <label>
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php endif; ?>

                <select <?php $this->link(); ?> multiple="multiple" style="height: 185px; width: 100%;">
                    <?php
                        foreach ( $this->choices as $value => $label ) {
                            $selected = ( in_array( $value, $this->value() ) ) ? selected( 1, 1, false ) : '';
                            echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
                        }
                    ?>
                </select>
            </label>
        <?php }
    }
}