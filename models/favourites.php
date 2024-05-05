<?php
class Favourites extends Model
{
    public function Index()
    {
    }

    public function getFavourites()
    {
        $query = "SELECT DISTINCT * FROM announcement LEFT JOIN company ON announcement.company_id = company.company_id INNER JOIN favourites USING(announcement_id) WHERE user_id = :user_id";
        $this->query($query);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $rows = $this->resultSet();
        return $rows;
    }

    public function addFavourite($id)
    {
        $query = "SELECT * FROM `favourites` WHERE announcement_id = :id AND user_id = :user_id";
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

        $query = "INSERT INTO `favourites`(`announcement_id`, `user_id`) VALUES (:id, :user_id)";
        $this->query($query);
        $this->bind(":id", $id);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $this->execute();

        if ($this->lastInsertId()) {
            return true;
        }
        return false;
    }

    public function deleteFavourite($id)
    {
        $query = "DELETE FROM favourites WHERE user_id = :user_id AND announcement_id = :announcement_id";
        $this->query($query);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $this->bind(":announcement_id", $id);
        $this->execute();
    }

    public function isFavourite($id)
    {
        $query = "SELECT COUNT(*) as liczba FROM favourites WHERE user_id = :user_id AND announcement_id = :id";
        $this->query($query);
        $this->bind(":user_id", $_SESSION['user_data']['user_id']);
        $this->bind(":id", $id);
        $rows = $this->single();
        if ($rows['liczba'] > 0) {
            return true;
        } else {
            return false;
        }
    }
}
