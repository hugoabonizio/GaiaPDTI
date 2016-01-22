<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  
  ['GET', '/organizations/select', 'organizations#select'],
  ['RESOURCES', 'organizations'],
  
  ['GET', '/documents/sections', 'documents#sections'],
  ['GET', '/documents/:id/options', 'documents#options'],
  ['POST', '/documents/:id/options', 'documents#change'],
  
  ['GET', '/documents/:id/organs', 'organs#index'],
  ['GET', '/documents/:id/organs/add', 'organs#add'],
  ['POST', '/documents/:id/organs', 'organs#create'],
  ['GET', '/documents/:id/organs/:organ_id', 'organs#edit'],
  ['POST', '/documents/:id/organs/:organ_id', 'organs#update'],
  ['POST', '/documents/:id/organs/:organ_id/destroy', 'organs#destroy'],
  
  ['RESOURCES', 'documents'],
  ['RESOURCES', 'users'],
  
  ['GET', '/render', 'render#render']
]);