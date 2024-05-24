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
                        We are preparing something new. <br> <span>Stay tuned!</span
                        EOF;
        return $weAreComingText;
    }
}