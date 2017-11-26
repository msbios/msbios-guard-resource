<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource;

use MSBios\Stdlib\Enum;

/**
 * Class Resources
 * @package MSBios\Guard\Resource
 */
abstract class Resources extends Enum
{
    /** @const USERS */
    const PERMISSIONS = 'acl_t_permissions';

    /** @const RESOURCERS */
    const RESOURCERS = 'acl_t_resources';

    /** @const ROLES */
    const ROLES = 'acl_t_roles';

    /** @const RULES */
    const RULES = 'acl_t_rules';

    /** @const USERS */
    const USERS = 'acl_t_users';

    /** @const USER_ROLES */
    const USER_ROLES = 'acl_t_user_roles';
}
