<?php
class CategoryController extends Controller
{
    protected function getName()
    {
        return 'category';
    }

    protected function Index()
    {
        $categoryModel = new Category();
        $this->returnView('index', $categoryModel->getCategories());
    }
    protected function add()
    {

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $model = new Category();
        if ($model->setCategory()) {
            Messages::setMsg("Poprawnie dodano kategorię", "success");
            $this->redirect('category');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('category');
        }

    }

    protected function delete()
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $model = new Category();
        if ($model->deleteCategory()) {
            Messages::setMsg("Poprawnie usunięto kategorię", "success");
            $this->redirect('category');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('category');
        }
    }
}
?>