<?php
class FavouriteController extends Controller
{
    protected function Index()
    {
        $this->returnView('index');
    }
    protected function getName()
    {
        return 'favourite';
    }
}