<?php

class JsonTestScenario extends TestScenario {
    public function __construct() {
        parent::startScenario( __CLASS__ );

        /** Test failed becouse thats 2 different objects */
        parent::approveTest(
            'Decode empty object as empty object',
            json_decode('{}'),
            new stdClass()
        );
        parent::approveTest(
            'Is decoded empty object are object',
            json_decode('{}') instanceof stdClass,
            true
        );
        parent::approveTest(
            'Decode empty array as empty array',
            json_decode('[]') === [],
            true
        );
        parent::approveTest(
            'Decode empty object as empty array',
            json_decode( '{}', true ) === [],
            true
        );
        parent::approveTest(
            'Decode {"f1":1} as [ \'f1\' => 1 ]',
            json_decode( '{"f1":1}', true ) === [
                'f1' => 1,
            ],
            true
        );
        parent::approveTest(
            'Decode 2lvl depth',
            json_decode( '{"f1":{"f2":2}}', true, 2 ) === [
                'f1' => [
                    'f2' => 2,
                ],
            ],
            true
        );

        parent::endScenario();
    }
}
