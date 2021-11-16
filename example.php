add_action( 'wbk_after_reminder_sent_to_customer', 'my_wbk_after_reminder_sent_to_customer', 10, 1 );
function my_wbk_after_reminder_sent_to_customer( $data ){
    foreach( $data as $id ) {
	$booking = new WBK_Booking( $id );
	error_log( $booking->get( 'name' ) );
	error_log( $booking->get( 'phone' ) );
	error_log( $booking->get( 'email' ) );
    }
}
