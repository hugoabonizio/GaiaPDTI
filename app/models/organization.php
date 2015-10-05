<?php
class Organization extends \TORM\Model {

}

Organization::hasMany('user');
Organization::hasMany('documents');