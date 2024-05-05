<?php
class Applied extends Model
{
    public function Index()
    {
    }

    public function getApplied()
    {
        $query = "SELECT DISTINCT * FROM announcement LEFT JOIN company ON announcement.company_id = company.company_id INNER JOIN user_application USING(announcement_id) WHERE user_id = :user_id";
        $this->query($query);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $rows = $this->resultSet();
        return $rows;
    }

    public function addApplied($id)
    {
        $query = "SELECT * FROM `user_application` WHERE announcement_id = :id AND user_id = :user_id";
        $this->query($query);
        $this->bind(":id", $id);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $result = $this->resultSet();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        if (count($result) != 0) {
            return false;
        }


        $query = "INSERT INTO `user_application`(`announcement_id`, `user_id`) VALUES (:id, :user_id)";
        $this->query($query);
        $this->bind(":id", $id);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $this->execute();

        if ($this->lastInsertId()) {
            return true;
        }
        return false;
    }
}
