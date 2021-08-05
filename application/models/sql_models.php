<?php

class Sql_models extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }


    /* function fetchARecord2($tbl, $id){
        $this->db->select($tbl.'.*')->from($tbl);
        $this->db->where('md5('.$tbl.'.id)', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0)
            return $query->row_array();
        else
            return false;
    } */


    function countLGA($lga_id){
        $this->db->select('lga_id')->from('polling_unit');
        $this->db->where('lga_id', $lga_id);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function countUsers($lga_id){
        $this->db->select('lga_id')->from('polling_unit');
        $this->db->where('lga_id', $lga_id)->where('entered_by_user !=', "");
        $this->db->group_by('user_ip_address');
        $query = $this->db->get();
        return $query->num_rows();
    }


    public function searchStr($keyword) {
        $this->db->select('pu.*, lga.lga_name as city1');
        $this->db->from('polling_unit pu');
        $this->db->join('lga', 'lga.lga_id = pu.lga_id');

        $this->db->where("(lga.lga_name LIKE '%".$keyword."%')", NULL, FALSE);

        $this->db->group_by('lga.lga_id');
        
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }
    }



    
    public function fetchTbls($ward_id) {
        $this->db->select('ward_name, ward_description, entered_by_user');
        $this->db->from('ward');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }
    }


    
    public function fetchLGA($lga_id) {
        $this->db->select('lga_name');
        $this->db->from('lga')->where('lga_id', $lga_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row('lga_name');
        }else{
            return false;
        }
    }


    function fetchRecs($tbls){
        $this->db->select('*')->from($tbls);
        $query = $this->db->get();
        return $query;
    }


    function fetchTables($tbl, $lga_id){
        $this->db->select('pu.*, pu.uniqueid as id1, pu.ward_id as ward_id1, pu.date_entered as date_entered1, pu.user_ip_address as user_ip_address1');

        $this->db->from('polling_unit pu');
        $this->db->where('pu.polling_unit_name !=', '');
        
        //$this->db->join('lga', 'lga.lga_id = pu.lga_id');
        

        if($lga_id!=""){
            //$this->db->group_by('pu.ward_id');
            $this->db->where('pu.lga_id', $lga_id);
        }
        $this->db->order_by('pu.uniqueid', 'desc');
        
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }
    }


    var $order_column = array(null, "*");
    function make_datatables($tbls, $lga_id){
        //echo $tbls; exit;
        $tbls1="";
        if($tbls=="polling_unit") $tbls1 = "polling_unit";

        $this->fetchUsers($tbls1, $lga_id);

        if($lga_id == ""){
            if($_POST["length"] != -1){
                $this->db->limit($_POST["length"], $_POST["start"]);
            }
        }
        $query = $this->db->get();
        return $query->result();
    }


    
    public function get_filtered_data($tbls, $lga_id){
        $tbls1="";
        //echo $tbls." ssse"; exit;

        if($tbls=="polling_unit") $tbls1 = "polling_unit";
        $this->fetchUsers($tbls1, $lga_id);

        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_all_data($tbls, $lga_id){
        $tbls1="";
        $this->db->select("*");
        if($lga_id!="") $this->db->where('pu.lga_id', $lga_id);
        if($tbls == "polling_unit") $this->db->from('polling_unit');
        return $this->db->count_all_results();
    }

    

    function fetchUsers($tbls, $lga_id){
        //echo $tbls."wwww =="; exit;
        $nowtime = time();
        if($lga_id=="") $txtsrchs = $_POST['search']['value'];


        if($tbls=="polling_unit"){
            $this->db->select('pu.*, pu.uniqueid as id1, pu.ward_id as ward_id1, pu.date_entered as date_entered1, pu.user_ip_address as user_ip_address1, lga.lga_name');

            $this->db->from('polling_unit pu')->where('pu.polling_unit_name !=', '');

            $this->db->join('lga', 'lga.lga_id = pu.lga_id');

            //$this->db->join('ward', 'ward.ward_id = pu.ward_id');

            $strs = trim(substr($txtsrchs, -4));
            

            if(isset($txtsrchs) && $txtsrchs!="latest" && $txtsrchs!="oldest"){
                if($strs != "_lga"){
                    if(isset($txtsrchs) && $txtsrchs!=""){
                        $srchs = "(lga.lga_name like '%$txtsrchs%' OR pu.polling_unit_name like '%$txtsrchs%' OR pu.polling_unit_description like '%$txtsrchs%' OR pu.polling_unit_number like '%$txtsrchs%' OR pu.entered_by_user like '%$txtsrchs%' OR lga.lga_description like '%$txtsrchs%')";
                        $this->db->where("$srchs");
                    }
                }else{
                    $strs = trim(substr($txtsrchs, 0, -4));
                    //echo $strs; exit;
                    if($strs!="all"){
                        if(isset($txtsrchs) && $txtsrchs!=""){
                            $srchs = "(lga.lga_id = '$strs')";
                            $this->db->where("$srchs");
                        }
                    }
                }
            }
            

            if($lga_id!="") $this->db->where('pu.lga_id', $lga_id);

            
            $this->db->group_by('pu.lga_id');

            //echo $txtsrchs; exit;

            if(isset($txtsrchs) && $txtsrchs=="latest"){
                $this->db->order_by('pu.uniqueid', 'desc');
            }else{
                $this->db->order_by('pu.uniqueid', 'asc');
            }
            //$this->db->order_by('pu.uniqueid', 'desc');
        }


    }


}

?>