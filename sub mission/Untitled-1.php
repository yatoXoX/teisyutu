<?php
class Book {

    // ↓フィールド
    /* タイトル */
    private $title;
    /* 著者 */
    private $auther;
    /* 価格 */
    private $price;
    // ↑フィールド
    
    /*
    コンストラクタ
    */
    function __construct($title, $auther, $price) {
        echo "new したよ\n";
        $this->title = $title;
        $this->auther = $auther;
        $this->price = $price;
    }
    
    function getTitle() {
        return $this->title;
    }
    
    function getAuther() {
        return $this->auther;
    }
    
    function getPrice() {
        return $this->price;
    }
}
?>
﻿