<?php
class FavouritesController extends Controller
{
    protected function Index()
    {
        $model = new Favourites();
        $this->returnView('index', $model->getFavourites());
    }
    protected function getName()
    {
        return 'favourite';
    }
    public function add($id)
    {
        $model = new Favourites();
        if ($model->addFavourite($id)) {
            $this->redirect('favourites');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('ads', "announcement", $id);
        }
    }
    public function delete($id)
    {
        $model = new Favourites();
        $model->deleteFavourite($id);
        $this->redirect('ads', "announcement", $id);
    }
}
