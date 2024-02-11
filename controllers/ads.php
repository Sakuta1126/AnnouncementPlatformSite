<?php
class AdsController extends Controller
{
    protected function Index()
    {
        $model = new Ad();
        $this->returnView('index', $model->Index());
    }
    protected function getName()
    {
        return 'ads';
    }
    public function announcement($id)
    {
        $model = new Ad();
        $result = $model->announcement($id);
        if ($result == null) {
            $this->redirect('home');
        }
        $this->returnView('announcement', $result);
    }

    public function delete($id)
    {
        $model = new Ad();
        $model->delete($id);
        $this->redirect('ads');
    }

    public function add()
    {
        $categoryModel = new Category();
        $companyModel = new Company();
        $data = [
            "categories" => $categoryModel->getCategories(),
            "companies" => $companyModel->getCompanies()
        ];
        $this->returnView('addAnnouncement', $data);
    }

    public function addAnnouncement()
    {

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $model = new Ad();
        if ($model->setAnnouncement()) {
            Messages::setMsg("Poprawnie dodano ogłoszenie", "success");
            $this->redirect('ads', 'add');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('ads', 'add');
        }

    }
}