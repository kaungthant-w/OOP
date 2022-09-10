<?php

trait trait1 {
    public function msg1() {
        echo "trait1 msg1";
    }
}

trait trait2 {
    public function msg2() {
        echo "trait2 msg2";
    }
}


class Traits {
    use trait1;
    use trait2;
}

$traits = new Traits;

$traits->msg1();
$traits->msg2();