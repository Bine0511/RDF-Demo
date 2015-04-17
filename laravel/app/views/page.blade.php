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
);
$store = ARC2::getStore($config);


$query = '
PREFIX owl: <http://www.w3.org/2002/07/owl#>
PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
PREFIX foaf: <http://xmlns.com/foaf/0.1/>
PREFIX dc: <http://purl.org/dc/elements/1.1/>
PREFIX : <http://dbpedia.org/resource/>
PREFIX dbpedia2: <http://dbpedia.org/property/>
PREFIX dbpedia: <http://dbpedia.org/>
PREFIX skos: <http://www.w3.org/2004/02/skos/core#>
PREFIX dbpedia-owl: <http://dbpedia.org/ontology/>
PREFIX dcterms: <http://purl.org/dc/terms/>
PREFIX category: <http://dbpedia.org/resource/Category:>

SELECT DISTINCT ?label ?desc ?img
WHERE  { <http://dbpedia.org/resource/'.$page.'> rdfs:label ?label . filter(langMatches(lang(?label),"en")) . <http://dbpedia.org/resource/'.$page.'> dbpedia-owl:abstract ?desc . filter(langMatches(lang(?desc),"en")) . OPTIONAL {<http://dbpedia.org/resource/'.$page.'> dbpedia-owl:thumbnail ?img}}
';

$r = '';
if ($rows = $store->query($query, 'rows')) {
  foreach ($rows as $row) {
    if(isset($row['img'])){
      $r .= '<div class="row"><div class="large-12 columns"><h1 class="page">' . $row['label'] .'</h1></div></div><div class="row"><div class="large-8 medium-6 columns"><p class="page">' . $row['desc'] . '</p></div><div class="large-4 medium-6 columns" style="text-align:center"><img class="page" src="'.$row['img'].'" /></div></div>';
    }
    else{
      $r .= '<div class="row"><div class="large-12 columns"><h1 class="page">' . $row['label'] .'</h1></div></div><div class="row"><div class="large-12 medium-12 columns"><p class="page">' . $row['desc'] . '</p></div></div>';
    }
  }
}

echo $r ? '<div>' . $r . '</div>' : '<div class="row"><div class="large-12 columns"><h1 class="page">Nothing Found</h1></div></div>';

?>
@stop
