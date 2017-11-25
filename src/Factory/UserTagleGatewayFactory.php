<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Guard\Resource\Record\User;
use MSBios\Guard\Resource\Table\UserTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class UserTagleGatewayFactory
 * @package MSBios\Guard\Resource\Factory
 */
class UserTagleGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return UserTableGateway
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature(new User($adapter));

        return new UserTableGateway(
            new TableGateway('acl_t_users', $adapter, $feature)
        );
    }
}
