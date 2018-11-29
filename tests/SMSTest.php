<?php
/**
 * Created by PhpStorm.
 * User: ivanjezdovic
 * Date: 2018-11-29
 * Time: 14:07
 */

namespace Quiubas;
require_once 'Quiubas.php';
use PHPUnit\Framework\TestCase;

\Quiubas\Quiubas::setAuth( 'API_KEY', 'API_PRIVATE' );


class SMSTest extends TestCase
{

    public function testSend()
    {
        $response = \Quiubas\SMS::send(array(
            'to_number' => 'phone_number',
            'message' => 'Hello there'
        ));
        $isArray = gettype($response);
        $this->assertEquals('array',$isArray);
    }

    public function testGetResponses()
    {
        $response = \Quiubas\SMS::getResponses(array(
            'id' => 'sms_id'));

        $isArray = gettype($response);
        $this->assertEquals('array',$isArray);
    }

    public function testGet()
    {
        $response = \Quiubas\SMS::get(array(
            'id' => 'sms_id'));

        $isArray = gettype($response);
        $this->assertEquals('array',$isArray);
    }

    public function testGetAll()
    {
        $response = \Quiubas\SMS::getAll();

        $isArray = gettype($response);
        $this->assertEquals('array',$isArray);
    }
}
