<?php
/*Route::get('checkout', function(){
	echo 'Hello from the checkout package!';
});*/

Route::get('/checkout', 'Devdojo\Calculator\CalculatorController@test');

Route::get('/paypal', 'Devdojo\Calculator\PayPalController@getIndex');
Route::get('paypal/ec-checkout', 'Devdojo\Calculator\PayPalController@getExpressCheckout');
Route::get('/cancel_url','Devdojo\Calculator\PayPalController@cancel_url');
?>