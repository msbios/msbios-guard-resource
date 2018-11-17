<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Guard\Resource\Record\Role;
use MSBios\Guard\Resource\Resources;
use MSBios\Guard\Resource\Table\RoleTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class UserTagleGatewayFactory
 * @package MSBios\Guard\Resource\Factory
 */
class RoleTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return RoleTableGateway|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var Role $record */
        $record = new Role('id', Resources::ROLES, $adapter);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature($record);

        // /** @var ResultSetInterface $resultSetPrototype */
        // $resultSetPrototype = new ResultSet;
        // $resultSetPrototype->setArrayObjectPrototype($record);

        return new $requestedName(
            new TableGateway(
                Resources::ROLES,
                $adapter,
                $feature
            )
        );
    }
}
