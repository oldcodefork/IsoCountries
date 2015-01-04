<?php
require 'Iso3Countries.php';

$countries = new Iso3Countries;
// exclude some countries and move GBR to top of list
print_r($countries->exclude(array('AFG', 'ALA', 'ALB'))->toTop('GBR')->get());
$countries->reset();
// show all countries
print_r($countries->get());
// get EU member states only
print_r($countries->get_eu());
