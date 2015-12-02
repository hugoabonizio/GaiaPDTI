<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations/select', 'organizations#select'],
  ['RESOURCES', 'organizations'],
  
  ['GET', '/documents', 'document#index'],
  ['GET', '/documents/new', 'document#initialize'],
  ['POST', '/documents/create', 'document#create'],
  ['GET', '/documents/:id', 'document#show'],
  
  ['RESOURCES', 'users']
]);