<?php
namespace DefaultApplication\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity
{
    protected $_accessible = array(
        '*' => true,
        'id' => false
    );
}