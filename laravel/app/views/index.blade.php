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

SELECT DISTINCT ?label ?desc ?x
WHERE  { ?x rdfs:label ?label . filter(langMatches(lang(?label),"en")) . ?x dbpedia-owl:abstract ?desc . filter(langMatches(lang(?desc),"en"))}
';


$r = '';
if ($rows = $store->query($query, 'rows')) {
  foreach ($rows as $row) {
    $r .= '<div class="row listpage"><div class="large-3 columns">&nbsp;</div><div class="large-6 columns"><p>' . substr($row['x'], 28) . '</p></div><div class="large-3 columns">&nbsp;</div></div>';
  }
}

echo $r ? '<div><div class="row"><div class="large-12 columns"><h1 class="name">List of all ... everything ... yeah</h1></div></div>' . $r . '</div>' : 'Store Empty, go to /load';

?>
@stop
