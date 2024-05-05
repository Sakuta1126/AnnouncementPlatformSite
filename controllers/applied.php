<?php
class AppliedController extends Controller
{
    protected function Index()
    {
        $model = new Applied();
        $this->returnView('index', $model->getApplied());
    }
    protected function getName()
    {
        return 'applied';
    }
    public function Confirm($id)
    {
        $model = new Applied();
        $userModel = new User();
        $data = [
            "id" => $id,
            "user" => $userModel->getUser()
        ];
        $this->returnView('confirm', $data);
    }
    public function apply($id)
    {
        $model = new Applied();
        if ($model->addApplied($id)) {
            $this->redirect('applied');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('ads', "announcement", $id);
        }
    }
}
