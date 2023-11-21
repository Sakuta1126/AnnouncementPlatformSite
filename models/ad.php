<?php
class Ad extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM announcement,company ORDER BY announcement_id ASC');

        $rows = $this->resultSet();
        return $rows;
    }


}