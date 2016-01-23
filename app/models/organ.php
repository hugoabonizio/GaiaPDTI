<?php
class Organ extends \TORM\Model {

}

Organ::belongsTo('document');
Organ::hasMany('meetings');