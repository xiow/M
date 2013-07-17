<?php
/**
 * User: Guowei
 * Date: 13-7-13
 * Time: 下午10:35
 */

namespace M\Mvc\Controller;


abstract class AbstractController
{
    public function __construct()
    {
        $this->init();
    }

    /*
     * Initialization
     */
    public function init()
    {

    }

}