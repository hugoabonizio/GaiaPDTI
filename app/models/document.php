<?php
class Document extends \TORM\Model {

}

Document::belongsTo('organization');
Document::hasOne('introduction');