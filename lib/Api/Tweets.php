<?php
namespace Leadsengage\Api;

/**
 * Tweets Context
 */
class Tweets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'tweets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'tweet';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array();
}
