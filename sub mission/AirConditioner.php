<?php
class AirConditioner {

    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode = "冷房";
    
    private $mode2 = "暖房";

    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;

    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小限に戻ること
    (1->2->3->4->5->1)
    */
    private $power;

    /*
    コンストラクタ
    */
    function __construct($temperature,$power) {
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること

        if ($temperature > 30) {
            $temperature = 30;
        }elseif ($temperature < 18) {
            $temperature = 18;
        }
        $this->temperature = $temperature;

        if ($power > 5) {
            $power = 5;
        }elseif ($power < 1){
            $power = 1;
        }
        $this->power = $power;

    }

    function changeCool(){
        $this->mode = "冷房";
    }

    function changeHeat(){
        $this->mode = "暖房";
    }

    function changeDry(){
        $this->mode = "除湿";
    }

    function turnUp(){
        $this->temperature--;
        if($this->temperature < 18){
            $this->temperature = 18;
        }
    }

    function turnDown(){
        $this->temperature++;
        if($this->temperature > 30){
            $this->temperature = 30;
        }
    }

    function airFlow(){
        $this->power++;
        if($this->power > 5){
            $this->power = 1;
        }
    }

    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード  : $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量    : $this->power\n";
    }
    
    function Heat() {
        echo "======現在の設定======\n";
        echo "モード  : $this->mode2\n";
        echo "設定温度: $this->temperature\n";
        echo "風量    : $this->power\n";
     }
}
?>
