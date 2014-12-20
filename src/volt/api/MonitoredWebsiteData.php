<?php
namespace volt\api;

use pocketmine\plugin\PluginBase;

class MonitoredWebsiteData extends WebsiteData{

    final public function __construct($name){
        $this->name = ($name instanceof PluginBase ? $name->getName() : $name);
        parent::__construct();
    }

    public function offsetExists($offset){
        parent::offsetExists($offset); // TODO: Change the autogenerated stub
    }

    public function offsetGet($offset){
        parent::offsetGet($offset); // TODO: Change the autogenerated stub
    }

    public function offsetSet($offset, $value){
        parent::offsetSet($offset, $value); // TODO: Change the autogenerated stub
    }

    public function offsetUnset($offset){
        parent::offsetUnset($offset); // TODO: Change the autogenerated stub
    }
}