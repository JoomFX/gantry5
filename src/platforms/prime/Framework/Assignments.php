<?php
/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   Dual License: MIT or GNU/GPLv2 and later
 *
 * http://opensource.org/licenses/MIT
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Gantry Framework code that extends GPL code is considered GNU/GPLv2 and later
 */

namespace Gantry\Framework;

use Gantry\Prime\Pages;

class Assignments
{
    protected $configuration_id;
    protected $pages;

    public function __construct($configuration_id)
    {
        $this->configuration_id = $configuration_id;
    }

    public function get()
    {
        if (!$this->pages) {
            $pages = new Pages();
            $this->pages = [];
            foreach ($pages as $page => $file) {
                $path = explode('/', $page);
                $this->pages[] = [
                    'name' => 'page[' . $page . ']',
                    'field' => ['id', 'link-' . preg_replace('|[^a-zA-Z0-9-]|', '-', $page)],
                    'value' => 0, // TODO
                    'label' => str_repeat('- ', count($path)) . ucwords(trim(end($path), '_'))
                ];
            }
        }

        return [['label' => 'Pages', 'items' => $this->pages]];
    }

    public function set($data)
    {
    }

    public function types()
    {
        return ['pages'];
    }

    public function getAssignment()
    {
        return 'default';
    }

    public function setAssignment($value)
    {
        throw new \RuntimeException('Not implemented');
    }

    public function assignmentOptions()
    {
        return [];
    }
}
