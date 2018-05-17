<?php
namespace Leadsengage;

use Leadsengage\Auth\AuthInterface;
use Leadsengage\Exception\ContextNotFoundException;

/**
 * Leadsengage API Factory
 */
class LeadsengageApi
{
    /**
     * Get an API context object
     *
     * @param string        $apiContext API context (leads, forms, etc)
     * @param AuthInterface $auth       API Auth object
     * @param string        $baseUrl    Base URL for API endpoints
     *
     * @return Api\Api
     * @throws ContextNotFoundException
     *
     * @deprecated
     */
    public static function getContext($apiContext, AuthInterface $auth, $baseUrl = '')
    {
        static $contexts = array();

        $apiContext = ucfirst($apiContext);

        if (!isset($context[$apiContext])) {
            $class = 'Leadsengage\\Api\\'.$apiContext;

            if (!class_exists($class)) {
                throw new ContextNotFoundException("A context of '$apiContext' was not found.");
            }

            $contexts[$apiContext] = new $class($auth, $baseUrl);
        }

        return $contexts[$apiContext];
    }

    /**
     * Get an API context object
     *
     * @param string        $apiContext API context (leads, forms, etc)
     * @param AuthInterface $auth       API Auth object
     * @param string        $baseUrl    Base URL for API endpoints
     *
     * @return Api\Api
     * @throws ContextNotFoundException
     */
    public function newApi($apiContext, AuthInterface $auth, $baseUrl = '')
    {
        $apiContext = ucfirst($apiContext);

        $class = 'Leadsengage\\Api\\'.$apiContext;


        if (!class_exists($class)) {
            throw new ContextNotFoundException("A context of '$apiContext' was not found.");
        }

        return new $class($auth, $baseUrl);
    }
}
