<?php
class Document extends \TORM\Model {

}

Document::belongsTo('organization');
Document::hasOne('introduction');
Document::hasOne('referential');
Document::hasOne('infra');
Document::hasOne('action');
Document::hasOne('adddata');
Document::hasOne('rh');
Document::hasOne('conclusion');
Document::hasMany('organs');
Document::hasMany('meetings');
