<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Guard\Resource\Record\User;
use MSBios\Guard\Resource\Resources;
use MSBios\Guard\Resource\Table\UserTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class UserTableGatewayFactory
 * @package MSBios\Guard\Resource\Factory
 */
class UserTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return UserTableGateway|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var User $record */
        $record = new User('id', Resources::USERS, $adapter);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature($record);

        // /** @var ResultSetInterface $resultSetPrototype */
        // $resultSetPrototype = new ResultSet;
        // $resultSetPrototype->setArrayObjectPrototype($record);

        return new UserTableGateway(
            new TableGateway(
                Resources::USERS,
                $adapter,
                $feature
            )
        );
    }
}
