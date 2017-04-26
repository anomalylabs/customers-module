<?php namespace Anomaly\CustomersModule\Group\Command;

use Anomaly\CustomersModule\Group\Contract\GroupInterface;
use Anomaly\CustomersModule\Group\Contract\GroupRepositoryInterface;


/**
 * Class GetGroup
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\CustomersModule\Group\Command
 */
class GetGroup
{

    /**
     * The group identifier.
     *
     * @var mixed
     */
    protected $identifier;

    /**
     * Create a new GetGroup instance.
     *
     * @param $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Handle the command.
     *
     * @param GroupRepositoryInterface $groups
     * @return GroupInterface|null
     */
    public function handle(GroupRepositoryInterface $groups)
    {
        if (is_numeric($this->identifier)) {
            return $groups->find($this->identifier);
        }

        if (!is_numeric($this->identifier)) {
            return $groups->findBySlug($this->identifier);
        }

        return null;
    }
}
