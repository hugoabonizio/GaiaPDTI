<?php
\Framework\Router::draw([
	['GET', '/', 'session#login'],
  ['POST', '/', 'session#create'],
  ['GET', '/logout', 'session#logout'],
  
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
  
  ['GET', '/documents/:id/meetings', 'meetings#index'],
  ['GET', '/documents/:id/meetings/add', 'meetings#add'],
  ['POST', '/documents/:id/meetings', 'meetings#create'],
  ['GET', '/documents/:id/meetings/:meeting_id', 'meetings#edit'],
  ['POST', '/documents/:id/meetings/:meeting_id', 'meetings#update'],
  ['POST', '/documents/:id/meetings/:meeting_id/destroy', 'meetings#destroy'],
  
  ['RESOURCES', 'documents'],
  ['RESOURCES', 'users'],
  
  ['GET', '/render', 'render#render']
]);