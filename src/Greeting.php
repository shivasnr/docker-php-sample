<?php
/**
 * Simple greeting class
 */

namespace App;

class Greeting
{
    // say we are coming to universe
    public function sayWeAreComing()
    {
        $weAreComingText = <<<EOF
                        Hey folks!
                        EOF;
        return $weAreComingText;
    }
}