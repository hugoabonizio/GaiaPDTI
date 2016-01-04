<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations/select', 'organizations#select'],
  ['RESOURCES', 'organizations'],
  
  ['GET', '/documents/sections', 'documents#sections'],
  ['RESOURCES', 'documents'],
  ['RESOURCES', 'users'],
  
  ['GET', '/render', 'render#render']
]);