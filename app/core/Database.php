<?php

Trait Database
{
    private function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        return $con = new PDO($string, DBUSER, DBPASS);
    }

    public function query($query, $data = [])
    {
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}
