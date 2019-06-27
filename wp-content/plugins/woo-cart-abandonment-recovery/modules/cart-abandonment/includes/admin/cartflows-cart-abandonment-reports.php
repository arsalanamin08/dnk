<?php
/**
 * Cartflows view for cart abandonment reports.
 *
 * @package Woocommerce-Cart-Abandonment-Recovery
 */

?>

<div class="wcf-ca-report-btn">

	<div class="wcf-ca-left-report-field-group">
		<button onclick="window.location.search += '&filter=today';"
				class="button <?php echo 'today' === $filter ? 'button-primary' : 'button-secondary'; ?>"> Today
		</button>

		<button onclick="window.location.search += '&filter=yesterday';"
				class="button <?php echo 'yesterday' === $filter ? 'button-primary' : 'button-secondary'; ?>"> Yesterday
		</button>

		<button onclick="window.location.search += '&filter=last_week';"
				class="button <?php echo 'last_week' === $filter ? 'button-primary' : 'button-secondary'; ?>"> Last Week
		</button>

		<button onclick="window.location.search += '&filter=last_month';"
				class="button <?php echo 'last_month' === $filter ? 'button-primary' : 'button-secondary'; ?> "> Last Month
		</button>
	</div>

	<div class="wcf-ca-right-report-field-group">

		<input class="wcf-ca-filter-input" type="text" id="wcf_ca_custom_filter_from" placeholder="YYYY-MM-DD" value="<?php echo $from_date; ?>"/>
		<input class="wcf-ca-filter-input" type="text" id="wcf_ca_custom_filter_to" placeholder="YYYY-MM-DD" value="<?php echo $to_date; ?>" />
		<button id="wcf_ca_custom_filter"
				class="button <?php echo 'custom' === $filter ? 'button-primary' : 'button-secondary'; ?> "> Custom Filter
		</button>

	</div>

</div>

<div class="wcf-ca-grid-container">

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title">
			<h3> <?php _e( 'Recoverable Orders', 'cartflows-ca' ); ?> </h3>
		</div>
		<div class="wcf-ca-ibox-content">
			<h1> <?php echo $abandoned_report['no_of_orders']; ?> </h1>
			<small> <?php _e( 'Total Recoverable Orders.', 'cartflows-ca' ); ?>  </small>
		</div>
	</div>

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title"><h3><?php _e( 'Recovered Orders', 'cartflows-ca' ); ?></h3></div>
		<div class="wcf-ca-ibox-content"><h1><?php echo $recovered_report['no_of_orders']; ?></h1>
			<small> <?php _e( 'Total Recovered Orders.', 'cartflows-ca' ); ?> </small>
		</div>
	</div>

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title"><h3><?php _e( 'Lost Orders', 'cartflows-ca' ); ?></h3></div>
		<div class="wcf-ca-ibox-content"><h1
			><?php echo  $lost_report['no_of_orders']; ?></h1>
			<small> <?php _e( 'Total Lost Orders.', 'cartflows-ca' ); ?>  </small>
		</div>
	</div>

</div>

<div class="wcf-ca-grid-container">

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title"><h3> <?php _e( 'Recoverable Revenue', 'cartflows-ca' ); ?> </h3></div>
		<div class="wcf-ca-ibox-content">
			<h1>
				<?php echo $currency_symbol . number_format_i18n( $abandoned_report['revenue'], 2 ); ?>
			</h1>
			<small> <?php _e( 'Total Recoverable Revenue.', 'cartflows-ca' ); ?> </small>
		</div>
	</div>

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title"><h3><?php _e( 'Recovered Revenue', 'cartflows-ca' ); ?></h3></div>
		<div class="wcf-ca-ibox-content"><h1>
				<?php
				echo $currency_symbol . number_format_i18n( $recovered_report['revenue'], 2 );
				?>
			</h1>
			<small> <?php _e( 'Total Recovered Revenue.', 'cartflows-ca' ); ?> </small>
		</div>
	</div>

	<div class="wcf-ca-ibox">
		<div class="wcf-ca-ibox-title"><h3> <?php _e( 'Recovery Rate', 'cartflows-ca' ); ?> </h3></div>
		<div class="wcf-ca-ibox-content"><h1><?php echo $conversion_rate . '%'; ?></h1>
			<small><?php _e( 'Total Percentage Of Recovered Orders After Abandonment.', 'cartflows-ca' ); ?> </small>
		</div>
	</div>

</div>

<hr/>

<div class="wcf-ca-report-btn">
	<div class="wcf-ca-left-report-field-group">
		<button onclick="window.location.search += '&filter_table=<?php echo WCF_CART_ABANDONED_ORDER; ?>';"
				class="button <?php echo WCF_CART_ABANDONED_ORDER === $filter_table ? 'button-primary' : 'button-secondary'; ?> "> Recoverable Orders
		</button>
		<button onclick="window.location.search += '&filter_table=<?php echo WCF_CART_COMPLETED_ORDER; ?>';"
				class="button <?php echo WCF_CART_COMPLETED_ORDER === $filter_table ? 'button-primary' : 'button-secondary'; ?>"> Recovered Orders
		</button>
		<button onclick="window.location.search += '&filter_table=<?php echo WCF_CART_LOST_ORDER; ?>';"
				class="button <?php echo WCF_CART_LOST_ORDER === $filter_table ? 'button-primary' : 'button-secondary'; ?>"> Lost Orders
		</button>
	</div>
</div>



<?php
if ( count( $wcf_list_table->items ) ) {
	$page = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_STRING );

	?>

<form id="wcf-cart-abandonment-table" method="GET">
	<input type="hidden" name="page" value="<?php echo esc_html( $page ); ?>"/>
	<?php $wcf_list_table->display(); ?>
</form>

	<?php
} else {

	echo "<div style='text-align: center;'> <strong> " . __( 'No Orders Found.', 'cartflows-ca' ) . '</strong> </div>';

}

?>
