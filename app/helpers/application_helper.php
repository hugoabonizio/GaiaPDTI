<?php
function url_for($action, $model, $id = null) {
  if (!is_string($model)) {
    $model = strtolower(get_class($model));
  }
  
  if (in_array($action, ['show', 'edit', 'update', 'destroy'])) {
    return '/' . $model . '/' . $id . '/' . $action;
  } else {
    return '/' . $model . '/' . $action;
  }
}