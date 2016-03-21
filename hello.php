<?php

class abc {

    public function hello()
    {
        $this->_hello("Hello World");
    }
  
    protected function _hello($msg)
    {
        echo $msg;
    }

}
