<?php
class AppliedController extends Controller
{
    protected function Index()
    {
        $this->returnView('index');
    }
    protected function getName()
    {
        return 'applied';
    }
}