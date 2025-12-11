<?php

/**
* Class for providing oqylyq group.
*
* To make sure there are no inconsistencies between data sets, run tests in tests/phpunit/settings_provider_test.php.
*
* @package    quizaccess_oqylyq
* @author     Eduard Zaukarnaev <eduard.zaukarnaev@gmail.com>
* @copyright  2020 Ertumar LLP
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

namespace quizaccess_oqylyq\oqylyq;

class Group implements ICommand {
    protected $group = [];

    public function __construct(array $data = []) {
        $this->group = $data;
    }

    public function getRequestUrl () : string {
        return '/groups';
    }

    public function getRequestData () : array {
        return $this->group;
    }

    public function getRequestQuery() : array {
        return [];
    }

    public function getRequestHeaders() : array {
        return [];
    }

    public function getRequestMethod () : string {
        return 'POST';
    }
}
