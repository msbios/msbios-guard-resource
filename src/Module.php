<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Guard\Resource;

use Doctrine\DBAL\Types\Type;
use MSBios\Guard\Resource\DBAL\Types\RuleType;
use MSBios\ModuleInterface;
use Zend\EventManager\EventInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

/**
 * Class Module
 * @package MSBios\Guard\Resource
 */
class Module implements ModuleInterface, BootstrapListenerInterface
{
    /** @const VERSION */
    const VERSION = '0.0.1';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     * @return array
     */
    public function onBootstrap(EventInterface $e)
    {
        Type::addType(RuleType::NAME, RuleType::class);
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
