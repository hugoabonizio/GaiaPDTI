<?php
class Organization extends \TORM\Model {

}

Organization::belongsTo('user');
Organization::hasMany('documents');