<?php
namespace Leadsengage\Api;

/**
 * Reports Context
 */
class Reports extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'reports';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'reports';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'report';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
    );

    /**
     * @var array
     */
    protected $endpointsSupported = array(
        'get',
        'getList'
    );
}
