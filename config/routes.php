<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations/select', 'organizations#select'],
  ['RESOURCES', 'organizations'],
  ['RESOURCES', 'documents'],
  ['RESOURCES', 'users']
]);