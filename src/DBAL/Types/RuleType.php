<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace MSBios\Guard\Resource\DBAL\Types;

use MSBios\Resource\DBAL\Types\EnumType;

/**
 * Class RuleType
 * @package MSBios\Guard\Resource\Resource\DBAL\Types
 */
class RuleType extends EnumType
{
    /** @const NAME */
    const NAME = 'rule_type';

    const ALLOW = 'ALLOW';
    const DENY = 'DENY';

    /**
     * @return array
     */
    public function getValues()
    {
        return [
            _('ALLOW'),
            _('DENY')
        ];
    }

    /**
     * Gets the name of this type.
     *
     * @return string
     *
     * @todo Needed?
     */
    public function getName()
    {
        return self::NAME;
    }
}
