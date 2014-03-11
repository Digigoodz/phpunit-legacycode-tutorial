<?php
namespace Tests;

use Tutorial\Tutorial;

/**
 * Class TutorialTest
 * @author Frank Lucht
 * @package Tests
 * @since 13.02.2014
 * @license For the full copyright and license information, please view the LICENSE file that was distributed with
 * this source code.
 */
class TutorialTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Simple test to verfify functionality of the Tutorial function
     */
    public function testTutorialClassShouldSaluteYou()
    {
        $expected = "Hello World!";

        $tutorial = new Tutorial();
        $this->assertEquals($expected, $tutorial->saluteYou());
    }
}
