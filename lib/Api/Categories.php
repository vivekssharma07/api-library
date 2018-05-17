<?php
namespace Leadsengage\Api;

/**
 * Categories Context
 */
class Categories extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'category';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
    );
}
