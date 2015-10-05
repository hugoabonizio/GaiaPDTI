<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations', 'organization#index'],
  ['GET', '/organizations/select', 'organization#select'],
  
  ['GET', '/documents', 'document#index'],
  ['GET', '/documents/new', 'document#initialize'],
  ['POST', '/documents/create', 'document#create'],
  ['GET', '/documents/:id', 'document#show'],
  
  ['GET', '/users', 'user#index']
]);