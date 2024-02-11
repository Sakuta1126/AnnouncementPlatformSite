<?php
class Company extends Model
{
    public function getCompanies()
    {
        $query = 'SELECT * FROM company;';
        $this->query($query);
        return $this->resultSet();
    }
    private function NotSetOrEmpty($var)
    {
        return !isset($var) || empty($var);
    }
    public function setCompany()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        if (
            $this->NotSetOrEmpty($post['name'])
            || $this->NotSetOrEmpty($post['adress'])
            || $this->NotSetOrEmpty($post['localization_link'])
            || $this->NotSetOrEmpty($post['description'])
        ) {
            return false;
        }


        $query = "INSERT INTO `company`(`name`, `adress`, `localization_link`, `description`) VALUES (:name, :adress, :localization_link, :description)";
        $this->query($query);
        $this->bind(":name", $post['name']);
        $this->bind(":adress", $post['adress']);
        $this->bind(":localization_link", $post['localization_link']);
        $this->bind(":description", $post['description']);
        $this->execute();


        if ($this->lastInsertId()) {
            return true;
        }
        return false;
    }

    public function deleteCompany()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        if (!isset($post['company_id'])) {
            return false;
        }
        $query = "DELETE FROM `company` WHERE company_id = :company_id";
        $this->query($query);
        $this->bind(":company_id", $post['company_id']);
        $this->execute();
        return true;
    }
}