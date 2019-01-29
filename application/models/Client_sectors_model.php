<?php

class Client_sectors_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'client_sectors';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $client_sectors_table = $this->db->dbprefix('client_sectors');
        $where = "";
        $id = get_array_value($options, "id");
        if ($id) {
            $where = " AND $client_sectors_table.id=$id";
        }

        $sql = "SELECT $client_sectors_table.*
        FROM $client_sectors_table
        WHERE $client_sectors_table.deleted=0 $where";
        return $this->db->query($sql);
    }

}
