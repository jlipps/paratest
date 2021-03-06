<?php

class OutputTest extends FunctionalTestBase
{
    public function testInstantFeedbackIsDisplayed()
    {
        $this->path = FIXTURES . DS . "tests" . DS . "UnitTestWithClassAnnotationTest.php";
        $output = $this->getParaTestOutput();
        $this->assertRegExp('/^\n\n\.F\.\./', $output);
    }

    public function testInstantFeedbackIsDisplayedWhenFunctional()
    {
        $this->path = FIXTURES . DS . "tests" . DS . "UnitTestWithClassAnnotationTest.php";
        $output = $this->getParaTestOutput(true);
        $this->assertRegExp('/^\n\n[.FE]*/', $output);
    }
}