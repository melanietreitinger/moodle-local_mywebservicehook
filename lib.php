<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * local_mywebservicehook - Library file
 *
 * @package    local_mywebservicehook
 * @copyright  2023 Melanie Treitinger, Ruhr-Universität Bochum <melanie.treitinger@ruhr-uni-bochum.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * My webservice callback function
 * @param object $function
 * @param array $params
 * @return false|mixed|void $result
 */
function local_mywebservicehook_override_webservice_execution($function, $params) {
    // This is the function we want to override.
    if ('XXXXXXXXXXXXXXXX' === $function->name) {
        // Do something...
        // YOUR CODE HERE!

        // Call the original function.
        $result = call_user_func_array([$function->classname, $function->methodname], $params);

        // Return the result of the called function.
        return $result;
    }
    return false; // Nothing happens with other webservice functions!
}


