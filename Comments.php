<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author tacch
 */
class Comments {

    public $comments;

    public function __construct($con) {
        require_once 'Comment.php';
        $sql = "SELECT * FROM `comment`";
        $ris = $con->query($sql);

        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->comments[$i] = new Comment($row["id"], $row["author"], $row["text"], $row["likes"]);
            $i++;
        }
    }

    public function getComment($id) {
        $comment = new Comment(0, "ERRORE", "ERRORE", 0);
        for ($x = 0; $x < count($this->comments); $x++) {
            if ($this->comments[$x]->id == $id) {
                return $this->comments[$x];
            }
        }
        return $comment;
    }

    public function getPopuComment() {
        $max = $this->comments[0]->likes;
        $maxId = $this->comments[0]->id;
        for ($x = 1; $x < count($this->comments); $x++) {
            if ($this->comments[$x]->likes > $max) {
                $max = $this->comments[$x]->likes;
                $maxId = $this->comments[$x]->id;
            }
        }
        return $this->getComment($maxId);
    }

}
