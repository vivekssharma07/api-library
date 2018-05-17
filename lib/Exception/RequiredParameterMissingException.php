<?php
namespace Leadsengage\Exception;

/**
 * Exception representing a required parameter is missing for Basic Authentication
 */
class RequiredParameterMissingException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Required Parameter is missing.';
}
