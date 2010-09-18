<?php


class TokenTable extends PluginTokenTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Token');
    }
}