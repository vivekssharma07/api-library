<?php
namespace Leadsengage\Exception;

/**
 * Exception representing an unsupported action
 */
class ActionNotSupportedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Action is not supported at this time.';
}
