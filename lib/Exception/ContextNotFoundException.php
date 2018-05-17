<?php
namespace Leadsengage\Exception;

/**
 * Exception representing a requested API context which was not found
 */
class ContextNotFoundException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Context not found.';
}
