<?php
class Document extends \TORM\Model {

}

Document::belongsTo('organization');
Document::hasOne('introduction');
Document::hasOne('referential');
Document::hasMany('organs');
Document::hasMany('meetings');
