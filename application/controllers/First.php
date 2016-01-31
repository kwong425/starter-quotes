<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {
    
    function __construct(){
	parent::__construct();
    }
    
    function index(){
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
     //-------------------------------------------------------------
    //  This will call on the bob monkhouse quote.
    //-------------------------------------------------------------
    function zzz() 
    {
        $this->data['pagebody'] = 'justone'; // We want this view
        $record = $this->quotes->first(); //Grab the first quote 
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    //  This will call on the quote that is routed by show/num
    
        function gimme($id) 
    {
        $this->data['pagebody'] = 'justone'; // We wnat to view this
        $record = $this->quotes->get($id); //Grabs the get method in quotes
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
}

