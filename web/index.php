<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontEnd', 'dev', true);
sfContext::createInstance($configuration)->dispatch();
