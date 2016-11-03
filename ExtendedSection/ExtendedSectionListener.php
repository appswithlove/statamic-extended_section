<?php
/**
 * @author Rémy M. Böhler
 */

namespace Statamic\Addons\ExtendedSection;

use Statamic\Extend\Listener;

/**
 * Class ExtendedSectionListener
 * @package Statamic\Addons\ExtendedSection
 */
class ExtendedSectionListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.add_to_head' => 'controlPanelHead',
    ];

    /**
     * @return string
     */
    public function controlPanelHead()
    {
        return $this->css->tag("cp") . PHP_EOL;
    }
}
