<?php

/**
 * Basic class for all tests scenarios.
 * Just display results on webpage.
 */

class TestScenario {

    /**
     * Start scenario and display results.
     */
    public function __construct() {
        $this->startScenario();
        $this->approveTest( 'Jack Sparrow', false, true );
        $this->approveTest( 'Captain Jack Sparrow', true, true );
        $this->endScenario();
    }

    private function approveTest( $label, $actual, $expected ) {
        ?><li class="<?=($actual === $expected)?'correct':'incorrect'?>"><?=$label?></li><?php
    }

    private function startScenario() {
        ?><div class="scenario"><h2><?=__CLASS__?></h2><ul id="<?=__CLASS__?>"><?php
    }

    private function endScenario() {
        ?></ul></div><?php
    }

}
