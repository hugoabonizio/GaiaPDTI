<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations/select', 'organizations#select'],
  ['RESOURCES', 'organizations'],
  
  ['GET', '/documents/sections', 'documents#sections'],
  ['GET', '/documents/:id/options', 'documents#options'],
  ['POST', '/documents/:id/options', 'documents#change'],
  ['RESOURCES', 'documents'],
  ['RESOURCES', 'users'],
  
  ['GET', '/render', 'render#render']
]);