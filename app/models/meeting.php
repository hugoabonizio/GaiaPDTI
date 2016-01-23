<?php
class Meeting extends \TORM\Model {

}

Meeting::belongsTo('document');
Meeting::hasOne('organ');