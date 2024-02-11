<?php

use Random\BrokenRandomEngineError;

class Ad extends Model
{
    public function Index()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        $query = 'SELECT * FROM announcement LEFT JOIN company ON announcement.company_id = company.company_id WHERE 1=1 ';
        if (isset($post['text']) && !empty($post['text'])) {
            $query .= " AND  position_name LIKE :position_name ";
        }
        if (isset($post['position_level']) && !empty($post['position_level'])) {
            $query .= " AND  position_level = :position_level ";
        }
        if (isset($post['contract_type']) && !empty($post['contract_type'])) {
            $query .= " AND  contract_type = :contract_type ";
        }
        if (isset($post['working_time']) && !empty($post['working_time'])) {
            $query .= " AND  working_time = :working_time ";
        }
        if (isset($post['work_type']) && !empty($post['work_type'])) {
            $query .= " AND  work_type = :work_type ";
        }
        if (isset($post['localization']) && !empty($post['localization'])) {
            $query .= " AND adress LIKE :adress ";
        }
        if (isset($post['category_id']) && !empty($post['category_id'])) {
            $query .= " AND category_id = :category_id ";
        }
        if (isset($post['company_id']) && !empty($post['company_id'])) {
            $query .= " AND company_id = :company_id ";
        }
        $query .= ' ORDER BY announcement_id ASC';
        $this->query($query);

        if (isset($post['text']) && !empty($post['text'])) {
            $text = "%" . $post['text'] . "%";
            $this->bind(':position_name', $text);
        }
        if (isset($post['localization']) && !empty($post['localization'])) {
            $text = "%" . $post['localization'] . "%";
            $this->bind(':adress', $text);
        }
        if (isset($post['position_level']) && !empty($post['position_level'])) {
            $this->bind(':position_level', $post['position_level']);
        }
        if (isset($post['contract_type']) && !empty($post['contract_type'])) {
            $this->bind(':contract_type', $post['contract_type']);
        }
        if (isset($post['working_time']) && !empty($post['working_time'])) {
            $this->bind(':working_time', $post['working_time']);
        }
        if (isset($post['work_type']) && !empty($post['work_type'])) {
            $this->bind(':work_type', $post['work_type']);
        }
        if (isset($post['category_id']) && !empty($post['category_id'])) {
            $this->bind(':category_id', $post['category_id']);
        }
        if (isset($post['company_id']) && !empty($post['company_id'])) {
            $this->bind(':company_id', $post['company_id']);
        }

        $rows = $this->resultSet();

        $this->query("SELECT * FROM announcement_category");
        $categories = $this->resultSet();

        $result = array();

        $result['rows'] = $rows;
        $result['post'] = $post;
        $result['categories'] = $categories;
        return $result;
    }

    public function announcement($id)
    {
        $query = 'SELECT * FROM announcement WHERE announcement_id=:announcement_id';
        $this->query($query);
        $this->bind(":announcement_id", $id);
        return $this->single();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM announcement WHERE announcement_id=:announcement_id';
        $this->query($query);
        $this->bind(":announcement_id", $id);
        $this->execute();
    }

    public function setAnnouncement()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );


        #company_id jest podane statycznie
        $query = "INSERT INTO `announcement` (`company_id`, `category_id`, `position_name`, `position_level`, `contract_type`, `working_time`, `work_type`, `working_hours`, `expire_date`, `duties`, `requirements`, `benefits`, `title`, `sallary`) VALUES (:company_id, :category_id, :position_name, :position_level, :contract_type, :working_time, :work_type, :working_hours, :expire_date, :duties, :requirements, :benefits, :title, :sallary)";
        $this->query($query);
        $this->bind(':company_id', $post['company_id']);
        $this->bind(':category_id', $post['category_id']);
        $this->bind(':position_name', $post['position_name']);

        $this->bind(':position_level', $post['position_level']);
        $this->bind(':contract_type', $post['contract_type']);
        $this->bind(':working_time', $post['working_time']);
        $this->bind(':work_type', $post['work_type']);
        $this->bind(':working_hours', $post['working_hours']);
        $this->bind(':expire_date', $post['expire_date']);
        $this->bind(':duties', $post['duties']);
        $this->bind(':requirements', $post['requirements']);
        $this->bind(':benefits', $post['benefits']);
        $this->bind(':title', $post['title']);
        $this->bind(':sallary', $post['sallary']);
        $row = $this->execute();
        $id = $this->lastInsertId();
        if (is_bool($id) && $id === false) {
            return false;
        }
        if (isset($post['working_days'])) {

            $query = "INSERT INTO `announcement_working_days` (`announcement_id`";
            // , `$working_day`) VALUES (:announcement_id, :$working_day)";
            foreach ($post['working_days'] as $working_day) {
                $query .= ", `$working_day`";
            }
            $query .= ") VALUES (:announcement_id";
            foreach ($post['working_days'] as $working_day) {
                $query .= ", :$working_day";
            }
            $query .= ")";
            $this->query($query);
            $this->bind(':announcement_id', $id);
            foreach ($post['working_days'] as $working_day) {
                $this->bind(":$working_day", 1);
            }
            $row = $this->execute();
            $id = $this->lastInsertId();
            if (is_bool($id) && $id === false) {
                return false;
            }
        }


        return true;

    }
}