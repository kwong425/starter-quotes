<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Wise extends Application {
    function __construct() {
        parent::__construct();
    }
    
    function Bingo() {
        $this->data['pagebody'] = 'justone'; // Show  the view
        $record = $this->quotes->get(6); //Grab the socrates quote 
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}