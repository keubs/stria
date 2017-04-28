

<div class="yc-features-desktop yc-features-icon-<?php echo $desktop_ip ?>">
	<?php
		if ( $desktop_ip != 'next-to-title' ) {
			include 'yc-features-icon-top.php';
		} else {
			include 'yc-features-icon-next.php';
		}
	?>
</div>


<?php
	if ( $tablet_use ) {
	?>
	<div class="yc-features-tablet yc-features-icon-<?php echo $tablet_ip ?>">
		<?php
			if ( $tablet_ip != 'next-to-title' ) {
				include 'yc-features-icon-top.php';
			} else {
				include 'yc-features-icon-next.php';
			}
		?>
	</div>
	<?php
	}
?>

<?php
	if ( $mobile_use ) {
	?>
	<div class="yc-features-mobile yc-features-icon-<?php echo $mobile_ip ?>">
		<?php
			if ( $mobile_ip != 'next-to-title' ) {
				include 'yc-features-icon-top.php';
			} else {
				include 'yc-features-icon-next.php';
			}
		?>
	</div>
	<?php
	}
?>