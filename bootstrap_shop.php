<?php
require_once('./vendor/autoload.php');

Marketcloud\Marketcloud::setCredentials(array(
  'secret_key' => getenv("MARKETCLOUD_SECRET_KEY"),
  'public_key' => getenv("MARKETCLOUD_PUBLIC_KEY")
));



session_start();

if (!isset($_SESSION["marketcloud_cart_id"]) OR empty($_SESSION["marketcloud_cart_id"])) {
	$cart_response = Marketcloud\Carts::create(array());
	$_SESSION["marketcloud_cart_id"] = $cart_response->body->data->id;

} else {
	$cart_response = Marketcloud\Carts::getById($_SESSION["marketcloud_cart_id"]);
	if ($cart_response->body->status == false){
		$cart_response = Marketcloud\Carts::create(array());
		$_SESSION["marketcloud_cart_id"] = $cart_response->body->data->id;
	}

}
$_SESSION["marketcloud_cart_items_number"] = count($cart_response->body->data->items);

$cart = $cart_response->body->data;

$categories = Marketcloud\Categories::get(array());
$categories = $categories->body->data;

?>