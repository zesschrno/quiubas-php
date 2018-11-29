<?php
/**
 * Created by PhpStorm.
 * User: ivanjezdovic
 * Date: 2018-11-29
 * Time: 13:46
 */
namespace Quiubas;
require_once 'Quiubas.php';
use PHPUnit\Framework\TestCase;

\Quiubas\Quiubas::setAuth( 'API_KEY', 'API_PRIVATE' );


class MNPTest extends TestCase
{

    public function testGetData()
    {
        $response = \Quiubas\MNP::getData(array(
            'number' => 'phone_number'));

        $isArray = gettype($response);
        $this->assertEquals('array',$isArray);
    }
}