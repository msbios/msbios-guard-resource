<?php
/**
 * @access protected
 * @access protected
 */

namespace MSBios\Guard\Resource\Table;

use MSBios\Guard\Resource\Resources;
use MSBios\Guard\Resource\UserInterface;
use MSBios\Resource\RecordRepository;
use Zend\Db\Sql\Select;

/**
 * Class RoleTableGateway
 * @package MSBios\Guard\Resource\Table
 */
class RoleTableGateway extends RecordRepository
{
    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function fetchByUser(UserInterface $user)
    {
        return $this->tableGateway->select(function (Select $select) use ($user) {
            $select->join(['ur' => Resources::USER_ROLES], 'acl_t_roles.id = ur.roleid', []);
            $select->where(['ur.userid' => $user->getId()]);
        });
    }
}
