<?php
class Event_model extends CI_Model 
{
        public function InsertEvent()
        {       
                $data = array(
                                'creator_user_id' => $this->User_model->getUserId(),
                                'description' => $this->input->post('description'),
                                'place' => $this->input->post('place'),
                                'status' => $this->Event_model->obtainPendingStatus(), // 0 Pending, 1 Confirmed, 2 Canceled
                                'start_date' => $this->Event_model->obtainformattedDateTime($this->input->post('sdate'), $this->input->post('stime')),
                                'end_date' =>  $this->Event_model->obtainformattedDateTime($this->input->post('edate'),$this->input->post('etime')),
                );
                
                $this->db->insert('event', $data);          
                
                $eventId = $this->db->insert_id();

                foreach ($this->input->post('interpreterSelect') as $interpretor_user_id)
                {
                        $data = array('event_id' => $eventId, 'interpretor_user_id' => $interpretor_user_id);                
                        $this->db->insert('event_interpreter', $data);    
                }
        }

        public function GetPendingEvents()
        {
                $this->load->model('Event_interpreter_model');
                $sql = "Select e.description, e.place, e.start_date, e.end_date, e.id, '' as name " .
                       "From event e " .
                       "Where creator_user_id=? And status=?";

                
                $qResult = $this->db->query($sql, array($this->User_model->getUserId(), $this->Event_model->obtainPendingStatus()))->result();

                foreach ($qResult as $row)
                {
                        $row->name = $this->Event_interpreter_model->GetInterpretorNamesByEventId($row->id);
                }

                return $qResult;
        }

        public function obtainformattedDateTime($d, $t)
        {
		return substr($d,6,4) . '-' .  substr($d,3,2) . '-' .  substr($d,0,2) . 'T' .  $t;
        }
        
        private function obtainPendingStatus()
        {
		return '0';
        }
}