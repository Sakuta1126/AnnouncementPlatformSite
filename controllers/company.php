<?php
class CompanyController extends Controller
{
    protected function Index()
    {
        $model = new Company();
        $this->returnView('index', $model->getCompanies());
    }
    protected function getName()
    {
        return 'company';
    }
    public function add(){
        $model = new Company();
        if ($model->setCompany()) {
            Messages::setMsg("Poprawnie dodano firmę", "success");
            $this->redirect('company');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('company');
        }
    }

    public function delete(){
        $model = new Company();
        if ($model->deleteCompany()) {
            Messages::setMsg("Poprawnie usunięto firmę", "success");
            $this->redirect('company');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('company');
        }
    }
    
}