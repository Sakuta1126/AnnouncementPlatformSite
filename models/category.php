<?php
class Category extends Model
{
    public function Index()
    {

    }
    public function getCategories()
    {
        $query = 'SELECT * FROM announcement_category;';
        $this->query($query);
        return $this->resultSet();
    }

    public function setCategory()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );


        $query = "INSERT INTO `announcement_category` (`name`) VALUES (:name)";
        $this->query($query);
        $this->bind(":name", $post['name']);
        $this->execute();


        if ($this->lastInsertId()) {
            return true;
        }
        return false;
    }

    public function deleteCategory()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );
        if (!isset($post['category_id'])) {
            return false;
        }
        $query = "DELETE FROM `announcement_category` WHERE category_id = :category_id";
        $this->query($query);
        $this->bind(":category_id", $post['category_id']);
        $this->execute();
        return true;
    }
}