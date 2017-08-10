<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Resource\Entity as DefaultEntity;

/**
 * Class Entity
 * @package MSBios\Guard\Resource
 * @ORM\MappedSuperclass
 */
abstract class Entity extends DefaultEntity
{
}
