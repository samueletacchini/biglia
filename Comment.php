<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author tacch
 */
class Comment {

    public $id;
    public $author;
    public $text;
    public $likes;
    
    
    
    
    
    function __construct($id, $author, $text, $likes) {
        $this->id = $id;
        $this->author = $author;
        $this->text = $text;
        $this->likes = $likes;
        
        
    }

}
