<?php
namespace Leadsengage\Api;

/**
 * Marketing Messages Context
 */
class Messages extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'messages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'message';
}
