<?php
function url_for($action, $model, $id = null) {
  if (!is_string($model)) {
    $model = strtolower(get_class($model));
  }
  
  if (in_array($action, ['show', 'edit', 'destroy'])) {
    return '/' . $model . '/' . $id . '/' . $action;
  } elseif ($action == 'update') {
    return '/' . $model . '/' . $id;
  } else {
    return '/' . $model . '/' . $action;
  }
}