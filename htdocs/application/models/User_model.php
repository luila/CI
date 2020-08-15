<?php
class User_model extends CI_Model 
{
        public function canLogin($email, $password)
        {
                $q = $this->db
                ->where('email', $email)
                ->where('password', $password)
                ->limit(1)->get('user');

                return ($q->num_rows() > 0);
        }

        public function setUserSession($email, $password)
        {
                $q = $this->db
                ->where('email', $email)
                ->where('password', $password)
                ->limit(1)->get('user');               

                $row = $q->row();
                if (isset($row))
                {
                        $newdata = array(
                                'username'  => $row->name,
                                'email'     => $row->email,
                                'userId'    => $row->id
                        );
                
                        $this->session->set_userdata($newdata);
                }
        }

        public function getUserName()
        {
                return  $this->session->userdata('username'); 
        }

        public function getUserId()
        {
                return  $this->session->userdata('userId');
        }

        public function getUserEmail()
        {
                return $this->session->userdata('email');
        }

        public function InsertUser($type)
        {
                // configura as colunas do BD
                $data = array(
                        'name' =>  $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'type' => $type,
                        'fatherId' =>  $this->User_model->getUserId()
                );
                
                // realiza o insert no BD
                // o $data tem os valores da coluna do BD
                // a função insert é do codeigniter que realiza inserções no BD
                // o "user" é o nome da tabela
                $this->db->insert('user', $data);          
        }

        public function getInterpreters()
        {
                $q = $this->db
                ->where('fatherId',  $this->User_model->getUserId())
                ->where('type', 'IN')
                ->get('user');

                return $q->result();
        }
}