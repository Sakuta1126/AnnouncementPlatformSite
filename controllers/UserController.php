<?php
class UsersController extends Controller
{
    protected function getName()
    {
        return 'users';
    }
    public function register()
    {
        $this->returnView('register');
    }
    public function createAccount()
    {
        $model = new User();

        if ($model->register()) {
            Messages::setMsg("Konto utworzone", "success");
            $this->redirect('users', 'login');
        } else {
            Messages::setMsg("Konto	nie	zostało	
            utworzone", "error");
            $this->redirect('users', 'register');
        }
    }
    public function login()
    {
        $this->returnView('login');
    }

    public function authenticate()
    {
        $model = new User();
        if ($model->login()) {
            Messages::setMsg("Zalogowano", "success");
            $this->redirect('home');
        } else {
            Messages::setMsg(
                "Nie	udało	się	zalogować",
                "error"
            );
            $this->redirect('users', 'login');
        }
    }
    public function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        Messages::setMsg('Wylogowano', 'success');
        $this->redirect('home');
    }
    public function profile()
    { 
        $model = new User();
        $this->returnView('profile', $model->getUser());
    }

    private function saveUserData(){
        $model = new User();
        if ($model->setUserData()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserExperience(){
        $model = new User();
        if ($model->setUserExperience()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserEducation(){
        $model = new User();
        if ($model->setUserEducation()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserLanguage(){
        $model = new User();
        if ($model->setUserLanguage()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserSkill(){
        $model = new User();
        if ($model->setUserSkill()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserCourse(){
        $model = new User();
        if ($model->setUserCourse()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    private function saveUserLink(){
        $model = new User();
        if ($model->setUserLink()) {
            Messages::setMsg("Poprawnie edytowano profil", "success");
            $this->redirect('users', 'profile');
        } else {
            Messages::setMsg(
                "Wystąpił błąd",
                "error"
            );
            $this->redirect('users', 'profile');
        }
    }

    public function save()
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        if (isset($_POST['type'])) {
            switch($_POST['type']){
                case "user_data":
                    $this->saveUserData(); 
                break;
                case "user_experience":
                    $this->saveUserExperience(); 
                break;
                case "user_education":
                    $this->saveUserEducation(); 
                break;
                case "user_language":
                    $this->saveUserLanguage(); 
                break;
                case "user_skill":
                    $this->saveUserSkill(); 
                break;
                case "user_course":
                    $this->saveUserCourse(); 
                break;
                case "user_link":
                    $this->saveUserLink(); 
                break;
                default:
                    Messages::setMsg("Nie rozpoznano typu danych", "error");
                    $this->redirect('users', 'profile');
                break;
            }
        } else {
            Messages::setMsg("Nie przesłano wysztkich pól formularza", "erorr");
            $this->redirect('users', 'profile');
        }
    }
    public function save2()
    {

    }
}

