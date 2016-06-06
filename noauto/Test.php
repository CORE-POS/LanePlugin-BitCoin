<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new BitCoin();
    }

    public function testParser()
    {
        $p = new BitCoinParser();
        $this->assertEquals(true, $p->check('BITCOIN'));
        $json = $p->parse('BITCOIN');
        $this->assertNotEquals(false, strstr($json['main_frame'], 'BitCoinAmountPage'));
    }

    public function testPages()
    {
        $page = new BitCoinPaymentPage();
        $this->assertEquals(true, $page->preprocess());
        ob_start();
        $page->head_content();
        $page->body_content();
        ob_get_clean();
    }
}

