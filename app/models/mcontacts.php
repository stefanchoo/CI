<?php

/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 2016/5/25
 * Time: 14:55
 */
class MContacts extends CI_Model{

    function addContact() {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'notes' => $this->input->post('notes', true),
            'ipaddress' => $this->input->ip_address(),
            'stamp' => $now
        );

        $this->db->insert('contacts', $data);
    }
}
