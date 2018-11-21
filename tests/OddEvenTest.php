<?php
use PHPUnit\Framework\TestCase;
require 'OddEven.php';

class OddEvenTests extends TestCase
{
    private $oddeven1;
 
    protected function setUp()
    {
        $this->oddeven1 = new OddEven();
    }
 
    protected function tearDown()
    {
        $this->oddeven1 = NULL;
    }
 
    public function testEven_OddNumber()
    {
        $result = $this->oddeven1->even(3);

        $this->assertEquals(false, $result);
    } 
    
    public function testEven_EvenNumber()
    {
        $result = $this->oddeven1->even(4);

        $this->assertEquals(true, $result);
    } 
}
