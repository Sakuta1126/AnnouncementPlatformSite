<?php
class User extends Model
{
    public function register()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        $password = sha1($post['password']);
        if (isset($post['submit'])) {

            if (
                $post['name'] == '' || $post['password'] == ''
            ) {
                Messages::setMsg('Proszę	wypełnić	
wszystkie	pola', 'error');
                return;
            }
            //	Insert	into	MySQL
            $userRoleId = 1;

            $this->query('INSERT INTO user (login, 
 password, role_id) VALUES(:login,  :password, :role_id)');
            $this->bind(':login', $post['name']);
            $this->bind(':password', $password);
            $this->bind(':role_id', $userRoleId);
            $this->execute();
            //	Verify
            if ($this->lastInsertId()) {
                return true;
            }
        }
        return false;
    }
    public function login()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        $password = sha1($post['password']);
        if (isset($post['submit'])) {
            // Compare Login
            $this->query('SELECT * FROM user INNER JOIN `user_role` USING(`role_id`) WHERE password = :password');

            $this->bind(':password', $password);

            $row = $this->single();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "user_id" => $row['user_id'],
                    "login" => $row['login'],
                    "role" => $row['name']
                );
                return true;
            }
        }

        return false;
    }

    public function setUserData()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        $target_file = "";

        function isPostNotEmpty($post)
        {
            return isset($post['name'])
                && isset($post['surname'])
                && isset($post['birth_date'])
                && isset($post['email'])
                && isset($post['telephone_number'])
                && isset($post['city'])
                && isset($post['currnent_occupation'])
                && isset($post['summary'])
                && isset($post['submit']);
        }

        function isPostValid($post, &$target_file)
        {
            $valid = preg_match("/[0-9]{9}/", $post['telephone_number'])
                && preg_match("/@{1}/", $post['email'])
                && preg_match("/.{0,25}/", $post['name'])
                && preg_match("/.{0,25}/", $post['surname'])
                && preg_match("/.{0,50}/", $post['email'])
                && preg_match("/.{0,35}/", $post['city'])
                && preg_match("/.{0,200}/", $post['currnent_occupation']);

            if (isset($_FILES['pfp'])) {
                $validImg = validateImageAndSave($target_file);
                $valid = $valid && $validImg;
            }

            return $valid;
        }

        function validateImageAndSave(&$out_target_file)
        {
            $file = $_FILES['pfp'];
            $target_dir = "images/upload/";

            if ($file['error'] == 0) {
                $file_name = $file['name'];
                replacePolishLettersAndPrepare($file_name);
                $out_target_file = $target_dir . $file_name;
                if (checkFileSize($file) == false)
                    return false;
                if (checkIfFileExists($out_target_file) == false)
                    return false;
                if (checkAcceptableExtensions($file_name)) {
                    if (checkImageSize($file['tmp_name']) == false)
                        return false;
                } else {
                    $out_target_file = "";
                    return false;
                }
            } else {
                $out_target_file = "";
                return false;
            }
            return $out_target_file;
        }

        function replacePolishLettersAndPrepare(&$file_name)
        {
            $replace_array = array(
                'ą' => 'a',
                'ć' => 'c',
                'ę' => 'e',
                'ł' => 'l',
                'ń' => 'n',
                'ó' => 'o',
                'ś' => 's',
                'ź' => 'z',
                'ż' => 'z',
                ' ' => '_'
            );
            $file_name = str_replace(array_keys($replace_array), array_values($replace_array), $file_name);
            $file_name = strtolower($file_name);

            $file_name = (new DateTime())->format('Y-m-d-H-i-s') . "_" . $file_name;
        }

        function checkAcceptableExtensions($file_name)
        {
            $tmp = explode('.', $file_name);
            $file_ext = strtolower(end($tmp));
            $extensions = array("png", "bmp", "jpg", "gif", "jpeg");
            if (in_array($file_ext, $extensions) === false) {
                return false;
            } else {
                return true;
            }
        }

        function checkFileSize($file)
        {
            $MB = 1048576;
            if ($file['size'] > 5 * $MB) {
                return false;
            }
            return true;
        }

        function checkIfFileExists($targetFilePath)
        {
            if (file_exists($targetFilePath)) {
                return false;
            }
            return true;
        }

        function checkImageSize($tmp_name)
        {
            if ($info = getimagesize($tmp_name)) {
                list(0 => $width, 1 => $height) = $info;
                if ($width > 2000) {
                    return false;
                }
                if ($height > 2000) {
                    return false;
                }
            } else {
                return false;
            }
            return true;
        }

        if (isPostNotEmpty($post) && isPostValid($post, $target_file)) {
            $this->query("SELECT * FROM user_data WHERE user_id = :user_id");
            $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            $row = $this->single();
            $isImgValid = (isset($_FILES['pfp']) && !empty($target_file));
            if ($isImgValid) {

                if (!move_uploaded_file($_FILES['pfp']['tmp_name'], $target_file)) {
                    return false;
                }
            }
            if (!$row) {
                $this->query("INSERT INTO `user_data` (`user_id`, `name`, `surname`, `birth_date`, `email`, `telephone_number`, `city`, `currnent_occupation`, `summary`, `pfp`) VALUES (:user_id, '', '', '', '', '', '', '', '', '')");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
                $this->execute();
            }

            $queryBody = 'UPDATE user_data SET name = :name, '
                . "surname = :surname, "
                . "birth_date = :birth_date, "
                . "email = :email, "
                . "telephone_number = :telephone_number, "
                . "city = :city, "
                . "currnent_occupation = :currnent_occupation, "
                . "summary = :summary "
                . ($isImgValid === false ? "" : ", pfp = :pfp ")
                . "WHERE user_id = :user_id";
            $this->query($queryBody);
            $post['currnent_occupation'] = trim($post['currnent_occupation']);
            $post['summary'] = trim($post['summary']);

            $this->bind(':surname', $post['surname']);
            $this->bind(':birth_date', $post['birth_date']);
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':telephone_number', $post['telephone_number']);
            $this->bind(':city', $post['city']);
            $this->bind(':currnent_occupation', $post['currnent_occupation']);
            $this->bind(':summary', $post['summary']);
            if ($isImgValid === true) {
                $this->bind(':pfp', $target_file);
            }
            $this->bind(':user_id', $_SESSION['user_data']['user_id']);

            $row = $this->execute();
            return true;
        }

        return false;
    }

    private function getUserData()
    {
        $this->query("SELECT * FROM user_data WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->single();
    }

    private function getUserExperience()
    {
        $this->query("SELECT * FROM user_experience WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    private function getUserEducation()
    {
        $this->query("SELECT * FROM user_education WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    private function getUserLanguages()
    {
        $this->query("SELECT * FROM user_language WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    private function getUserSkills()
    {
        $this->query("SELECT * FROM user_skill WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    private function getUserCourses()
    {
        $this->query("SELECT * FROM user_course WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    private function getUserLinks()
    {
        $this->query("SELECT * FROM user_link WHERE user_id = :user_id");
        $this->bind(':user_id', $_SESSION['user_data']['user_id']);
        return $this->resultSet();
    }

    public function getUser()
    {
        $user = array();
        $user['user_data'] = $this->getUserData();
        $user['user_experience'] = $this->getUserExperience();
        $user['user_education'] = $this->getUserEducation();
        $user['user_language'] = $this->getUserLanguages();
        $user['user_skill'] = $this->getUserSkills();
        $user['user_course'] = $this->getUserCourses();
        $user['user_link'] = $this->getUserLinks();

        return $user;
    }


    public function setUserExperience()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['position'])
                && isset($post['company'])
                && isset($post['localization'])
                && isset($post['period_start'])
                && isset($post['period_end'])
                && isset($post['duties'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            $valid = preg_match("/.{0,75}/", $post['position'])
                && preg_match("/.{0,50}/", $post['company'])
                && preg_match("/.{0,35}/", $post['localization'])
                && preg_match("/.{1,}/", $post['period_start'])
                && preg_match("/.{1,}/", $post['period_end']);

            if ($valid === false)
                return false;

            $data1 = new DateTime($post['period_start']);
            $data2 = new DateTime($post['period_end']);

            $roznica = $data1->diff($data2);

            if ($roznica->format('%R') === '-') {
                return false;
            }
            return true;
        }


        if (isPostNotEmpty($post) && isPostValid($post)) {
            $this->query("INSERT INTO `user_experience` (`experience_id`, `user_id`, `position`, `company`, `localization`, `period_start`, `period_end`, `duties`) VALUES (NULL, :user_id, :position, :company, :localization, :period_start, :period_end, :duties);");

            $post['duties'] = trim($post['duties']);

            $this->bind(':position', $post['position']);
            $this->bind(':company', $post['company']);
            $this->bind(':localization', $post['localization']);
            $this->bind(':period_start', $post['period_start']);
            $this->bind(':period_end', $post['period_end']);
            $this->bind(':duties', $post['duties']);
            $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            $row = $this->execute();
            return true;
        }
        return false;
    }

    public function setUserEducation()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['school_name'])
                && isset($post['city'])
                && isset($post['level'])
                && isset($post['specialization'])
                && isset($post['period_start'])
                && isset($post['period_end'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            $valid = preg_match("/.{0,75}/", $post['school_name'])
                && preg_match("/.{0,35}/", $post['city'])
                && preg_match("/.{0,75}/", $post['specialization'])
                && preg_match("/.{1,}/", $post['period_start'])
                && preg_match("/.{1,}/", $post['period_end']);

            if ($valid === false)
                return false;

            $data1 = new DateTime($post['period_start']);
            $data2 = new DateTime($post['period_end']);

            $roznica = $data1->diff($data2);

            if ($roznica->format('%R') === '-') {
                return false;
            }
            return true;
        }


        if (isPostNotEmpty($post) && isPostValid($post)) {

            if (isset($post['entity_id'])) {
                $this->query("UPDATE `user_education` SET school_name = :school_name, city = :city, level = :level, specialization = :specialization, period_start = :period_start, period_end = :period_end WHERE education_id = :education_id");
                $this->bind(':education_id', $post['entity_id']);
            } else {
                $this->query("INSERT INTO `user_education` (`education_id`, `user_id`, `school_name`, `city`, `level`, `specialization`, `period_start`, `period_end`) VALUES (NULL, :user_id, :school_name, :city, :level, :specialization, :period_start, :period_end)");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            }

            $this->bind(':school_name', $post['school_name']);
            $this->bind(':city', $post['city']);
            $this->bind(':level', $post['level']);
            $this->bind(':specialization', $post['specialization']);
            $this->bind(':period_start', $post['period_start']);
            $this->bind(':period_end', $post['period_end']);

            $row = $this->execute();
            return true;
        }
        return false;
    }

    public function setUserLanguage()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['language'])
                && isset($post['level'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            //TODO WALIDACJA
            return true;
        }


        if (isPostNotEmpty($post) && isPostValid($post)) {
            if (isset($post['entity_id'])) {
                $this->query("UPDATE `user_language` SET language = :language, level = :level WHERE language_id = :language_id");
                $this->bind(':language_id', $post['entity_id']);
            } else {
                $this->query("INSERT INTO `user_language` (`language_id`, `language`, `level`, `user_id`) VALUES (NULL, :language, :level, :user_id)");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            }

            $this->bind(':language', $post['language']);
            $this->bind(':level', $post['level']);

            $row = $this->execute();
            return true;
        }
        return false;
    }

    public function setUserSkill()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['name'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            //TODO WALIDACJA
            return true;
        }

        if (isPostNotEmpty($post) && isPostValid($post)) {
            if (isset($post['entity_id'])) {
                $this->query("UPDATE `user_skill` SET name = :name WHERE skill_id = :skill_id");
                $this->bind(':skill_id', $post['entity_id']);
            } else {
                $this->query("INSERT INTO `user_skill` (`skill_id`, `user_id`, `name`) VALUES (NULL,  :user_id, :name)");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            }

            $this->bind(':name', $post['name']);

            $row = $this->execute();
            return true;
        }
        return false;
    }

    public function setUserCourse()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['name'])
                && isset($post['organizer'])
                && isset($post['period_start'])
                && isset($post['period_end'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            $valid = preg_match("/.{1,}/", $post['period_start'])
                && preg_match("/.{1,}/", $post['period_end']);

            if ($valid === false)
                return false;

            $data1 = new DateTime($post['period_start']);
            $data2 = new DateTime($post['period_end']);

            $roznica = $data1->diff($data2);

            if ($roznica->format('%R') === '-') {
                return false;
            }
            return true;
        }


        if (isPostNotEmpty($post) && isPostValid($post)) {
            if (isset($post['entity_id'])) {
                $this->query("UPDATE `user_course` SET name = :name, organizer = :organizer, period_start = :period_start, period_end = :period_end WHERE course_id = :course_id");
                $this->bind(':course_id', $post['entity_id']);
            } else {
                $this->query("INSERT INTO `user_course` (`course_id`, `user_id`, `name`, `organizer`, `period_start`, `period_end`) VALUES (NULL, :user_id, :name, :organizer, :period_start, :period_end)");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            }

            $this->bind(':name', $post['name']);
            $this->bind(':organizer', $post['organizer']);
            $this->bind(':period_start', $post['period_start']);
            $this->bind(':period_end', $post['period_end']);

            $row = $this->execute();
            return true;
        }
        return false;
    }

    public function setUserLink()
    {
        //	Sanitize	POST
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        function isPostNotEmpty($post)
        {
            return isset($post['name'])
                && isset($post['submit']);
        }

        function isPostValid($post)
        {
            return true; //TODO walidacja
        }


        if (isPostNotEmpty($post) && isPostValid($post)) {
            if (isset($post['entity_id'])) {
                $this->query("UPDATE `user_link` SET name = :name WHERE link_id = :link_id");
                $this->bind(':link_id', $post['entity_id']);
            } else {
                $this->query("INSERT INTO `user_link` (`link_id`, `user_id`, `name`) VALUES (NULL, :user_id, :name)");
                $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            }

            $this->bind(':name', $post['name']);

            $row = $this->execute();
            return true;
        }
        return false;
    }


}