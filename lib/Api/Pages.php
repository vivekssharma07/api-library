<?php
namespace Leadsengage\Api;

/**
 * Pages Context
 */
class Pages extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'page';

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
