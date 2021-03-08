<?php
	$class_name     = $args['className'] ? $args['className'] : '';
	$padding_bottom  = $args['paddingBottom'] ? 'pb-' . $args['paddingBottom'] : '';
	$padding_top     = $args['paddingTop'] ? 'pt-' . $args['paddingTop'] : '';
	$margin_bottom   = $args['marginBottom'] ? 'mb-' . $args['marginBottom'] : '';
	$margin_top      = $args['marginTop'] ? 'mt-' . $args['marginTop'] : '';
	$spacings       = array_filter( array( $padding_bottom, $padding_top, $margin_bottom, $margin_top ) );
	$spacing_classes = implode( $spacings, ' ' );

?>
<div
	class='<?php echo $class_name . ' ' . $spacing_classes; ?>'
    <?php if($args['dataAOS']){echo 'data-aos="' . $args['dataAOS'] . '"'; } ?>
    <?php if($args['dataAOSOffset']){echo 'data-aos-offset="' . $args['dataAOSOffset'] . '"'; } ?>
    <?php if($args['dataAOSDelay']){echo 'data-aos-delay="' . $args['dataAOSDelay'] . '"'; } ?>
    <?php if($args['dataAOSDuration']){echo 'data-aos-duration="' . $args['dataAOSDuration'] . '"'; } ?>
    <?php if($args['dataAOSEasing']){echo 'data-aos-easing="' . $args['dataAOSEasing'] . '"'; } ?>
    <?php if($args['dataAOSMirror']){echo 'data-aos-mirror="' . $args['dataAOSMirror'] . '"'; } ?>
    <?php if($args['dataAOSOnce']){echo 'data-aos-once="' . $args['dataAOSOnce'] . '"'; } ?>
    <?php if($args['dataAOSAnchorPlacement']){echo 'data-aos-anchor-placement="' . $args['dataAOSAnchorPlacement'] . '"'; } ?>
>
