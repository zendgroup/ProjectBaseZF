<?php
namespace Application\Services;
use Zend\ServiceManager\AbstractFactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class ControlAbstractFactory implements AbstractFactoryInterface
{

    public function canCreateServiceWithName (ServiceLocatorInterface $locator,
            $name, $requestedName)
    {
        $class = $this->getClassName($requestedName);
        if (class_exists($class)) {
            return true;
        }

        return false;
    }

    public function createServiceWithName (ServiceLocatorInterface $locator,
            $name, $requestedName)
    {
        $class = $this->getClassName($requestedName);
        return new $class();
    }

    public function getModuleNamespace ()
    {
        $arrayNamespace = explode('\\', __NAMESPACE__);
        return ucfirst(array_shift($arrayNamespace));
    }

    public function getClassName ($requestedName)
    {
        $controllerClass = $this->getModuleNamespace() . '\Controller\\'.ucfirst($requestedName) . 'Controller';
        return $controllerClass;
    }
}
