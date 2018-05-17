<?php
namespace Leadsengage\Api;

/**
 * Notes Context
 */
class Notes extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'notes';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'note';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
    );
}
