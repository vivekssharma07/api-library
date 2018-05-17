<?php
namespace Leadsengage\Api;

/**
 * Roles Context
 */
class Roles extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'role';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:admin',
        'name',
    );
}