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
            $userRoleId = 1; // tutaj jakos czeba zrobic jakiegos enuma ? albo chuj wie co ? jakis global constant ? Poradzisz sobie. Pozdro.

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
            $this->query('SELECT * FROM user WHERE 
  password = :password');

            $this->bind(':password', $password);

            $row = $this->single();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "user_id" => $row['user_id'],
                    "login" => $row['login'],

                );
                return true;
            }
        }

        return false;
    }
}