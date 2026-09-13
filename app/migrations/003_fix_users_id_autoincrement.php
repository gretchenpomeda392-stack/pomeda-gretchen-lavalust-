<?php

class Fix_users_id_autoincrement
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->database();
    }

    public function up()
    {
        $this->_lava->db->query(
            'ALTER TABLE users MODIFY id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT'
        );
    }

    public function down()
    {
    }
}