<?php
namespace Leadsengage\Exception;

/**
 * Exception representing an incorrect parameter set for an OAuth token request
 */
class IncorrectParametersReturnedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Incorrect parameters returned.';
}
