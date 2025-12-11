<?php

/**
* Class for providing oqylyq user.
*
* To make sure there are no inconsistencies between data sets, run tests in tests/phpunit/settings_provider_test.php.
*
* @package    quizaccess_oqylyq
* @author     Eduard Zaukarnaev <eduard.zaukarnaev@gmail.com>
* @copyright  2020 Ertumar LLP
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

namespace quizaccess_oqylyq\oqylyq;

class Student implements ICommand {
    protected $user = [];

    public function __construct(array $data = []) {
        $this->user = [];
    }

    public function getRequestUrl () : string {
        return '/students';
    }

    public function getRequestData () : array {
        return $this->user;
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
