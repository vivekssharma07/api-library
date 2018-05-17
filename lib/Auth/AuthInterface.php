<?php
namespace Leadsengage\Auth;

interface AuthInterface
{
    /**
     * Check if current authorization is still valid
     *
     * @return bool
     */
    public function isAuthorized();

    /**
     * Make a request to server using the supported auth method
     *
     * @param string $url
     * @param array  $parameters
     * @param string $method
     * @param array  $settings
     *
     * @return array
     */
    public function makeRequest($url, array $parameters = array(), $method = 'GET', array $settings = array());
}
