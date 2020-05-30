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
        $this->startScenario( __CLASS__ );

        $this->approveTest( 'Jack Sparrow', false, true );
        $this->approveTest( 'Captain Jack Sparrow', true, true );

        $this->endScenario();
    }

    protected function approveTest( $label, $actual, $expected ) {
        ?><li class="<?=($actual === $expected)?'correct':'incorrect'?>"><?=$label?></li><?php
    }

    protected function startScenario( $className ) {
        ?><div class="scenario"><h2><?=$className?></h2><ul id="<?=__CLASS__?>"><?php
    }

    protected function endScenario() {
        ?></ul></div><?php
    }

}
