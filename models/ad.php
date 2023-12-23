<?php
class Ad extends Model
{
    public function Index()
    {
        $post = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_STRING
        );

        // echo "<pre>";s
        // print_r($post);
        // echo "</pre>";
        // die();

        $query = 'SELECT * FROM announcement LEFT JOIN company ON announcement.company_id = company.company_id WHERE 1=1 ';
        if(isset($post['text']) && !empty($post['text'])){
            $query.=" AND  position_name LIKE :position_name ";
        }
        if(isset($post['position_level']) && !empty($post['position_level'])){
            $query.=" AND  position_level = :position_level ";
        }
        if(isset($post['contract_type']) && !empty($post['contract_type'])){
            $query.=" AND  contract_type = :contract_type ";
        }
        if(isset($post['working_time']) && !empty($post['working_time'])){
            $query.=" AND  working_time = :working_time ";
        }
        if(isset($post['work_type']) && !empty($post['work_type'])){
            $query.=" AND  work_type = :work_type ";
        }
        if(isset($post['localization']) && !empty($post['localization'])){
            $query.=" AND adress LIKE :adress ";
        }
        if(isset($post['category_id']) && !empty($post['category_id'])){
            $query.=" AND category_id = :category_id ";
        }
        $query .= ' ORDER BY announcement_id ASC';
        $this->query($query);

        if(isset($post['text']) && !empty($post['text'])){
            $text = "%".$post['text']."%";
            $this->bind(':position_name', $text);
        }
        if(isset($post['localization']) && !empty($post['localization'])){
            $text = "%".$post['localization']."%";
            $this->bind(':adress', $text);
        }
        if(isset($post['position_level']) && !empty($post['position_level'])){
            $this->bind(':position_level', $post['position_level']);
        }
        if(isset($post['contract_type']) && !empty($post['contract_type'])){
            $this->bind(':contract_type', $post['contract_type']);
        }
        if(isset($post['working_time']) && !empty($post['working_time'])){
            $this->bind(':working_time', $post['working_time']);
        }
        if(isset($post['work_type']) && !empty($post['work_type'])){
            $this->bind(':work_type', $post['work_type']);
        }
        if(isset($post['category_id']) && !empty($post['category_id'])){
            $this->bind(':category_id', $post['category_id']);
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
}