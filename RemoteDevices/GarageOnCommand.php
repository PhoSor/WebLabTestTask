<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RemoteDevices;

/**
 * Description of GarageOnCommand
 *
 * @author User
 */
class GarageOnCommand implements Command {
    private $garage;
    
    function __construct(Garage $garage) {
       $this->garage = $garage;
    }
    
    public function execute() {
        $this->garage->open();
    }
    
    public function undo() {
        $this->garage->close();
    }
}
