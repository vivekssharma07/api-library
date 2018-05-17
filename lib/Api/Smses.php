<?php
namespace Leadsengage\Api;

/**
 * Smses Context
 */
class Smses extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'smses';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'smses';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'sms';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
        'is:uncategorized',
        'category',
        'lang',
    );
}
