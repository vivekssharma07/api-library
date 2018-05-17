<?php
namespace Leadsengage\Api;

/**
 * ContactFields Context
 */
class ContactFields extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'fields/contact';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'fields';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'field';
}
