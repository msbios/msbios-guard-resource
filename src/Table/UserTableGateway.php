<?php
/**
 * @access protected
 * @access protected
 */

namespace MSBios\Guard\Resource\Table;

use MSBios\Resource\Table\AbstractTableGateway;

/**
 * Class UserTableGateway
 * @package MSBios\Guard\Resource\Table
 */
class UserTableGateway extends AbstractTableGateway
{
    /**
     * @param $username
     * @return mixed
     */
    public function fetchOneByUsername($username)
    {
        return $this->tableGateway->fetchByUsername($username);
    }
}
