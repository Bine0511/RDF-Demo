@extends("layout")
@section("content")
	<?php
include_once("../../arc2-master/ARC2.php");

$config = array(
  'db_name' => 'rdfdemo',
  'db_user' => 'root',
  'db_pwd' => '',
  'store_name' => 'arc_rdf',
  'max_errors' => 100,

  'endpoint_features' => array(
    'select', 'construct'
  ),

  'endpoint_timeout' => 60,
  'endpoint_max_limit' => 250, /* optional */
);

$ep = ARC2::getStoreEndpoint($config);

if (!$ep->isSetUp()) {
  $ep->setUp(); /* create MySQL tables */
}

/* request handling */
$ep->go();

?>
@stop
