<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends CI_Controller {

    public $xauth;
    public $show_name;

    public function __construct(){
        parent::__construct();

        $this->load->helper(array('form', 'url', 'html', 'directory', 'cookie'));
        $this->load->library(array('form_validation', 'security', 'pagination', 'session', 'Compress', 'nativesession'));
        $this->load->library('controller_list');
        
        $this->perPage = 20;
        
        $this->form_validation->set_message('regex_match[/^[0-9]{6,11}$/]', 'Phone must contain numbers and a maximum of 11 digits!');
        $this->load->model('sql_models');

        
        @date_default_timezone_set('Africa/Lagos');

    }




    public function index(){
        $data['page_title'] = "";
        $data['page_name'] = "";
        $data['page_header'] = "";
        $data['datamsg'] = "";
        $data['city1'] = $this->sql_models->fetchRecs('lga');
        $this->load->view("header", $data);
        $this->load->view("index", $data);
        $this->load->view("footer", $data);
    }

    
    public function enter_results(){
        $data['page_title'] = "Enter Results";
        $data['page_name'] = "enter_results";
        $data['page_header'] = "";
        $data['datamsg'] = "";
        $data['parties'] = $this->sql_models->fetchRecs('party');
        $data['pu'] = $this->sql_models->fetchRecs('polling_unit');
        $this->load->view("header", $data);
        $this->load->view("forms", $data);
        $this->load->view("footer", $data);
    }



    function enterScore(){
        $txtparty = $this->input->post('txtparty');
        $txtunit = $this->input->post('txtunit');
        $txtname = $this->input->post('txtname');
        $txtscore = $this->input->post('txtscore');

        $this->form_validation->set_rules('txtparty', 'Party', 'required|trim');
        $this->form_validation->set_rules('txtunit', 'Polling Unit', 'required|trim');
        $this->form_validation->set_rules('txtscore', 'Score', 'required|trim|numeric');
        $this->form_validation->set_rules('txtname', 'Full Names', 'required|trim|min_length[5]|max_length[30]');

        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        }else{
            $datas = array(
                'polling_unit_uniqueid'     => $txtunit,
                'party_abbreviation'        => $txtparty,
                'party_score'               => $txtscore,
                'entered_by_user'           => $txtname,
                'user_ip_address'           => $_SERVER['REMOTE_ADDR'],
                'date_entered'              => date("Y-m-d H:i:s", time())
            );
            $querys = $this->db->insert('announced_pu_results', $datas);
            if($querys){
                echo "entered";
            }else{
                echo "error";
            }
        }
    }


    



    public function getSearches(){
        $keyword = $this->input->post('keyword');

        if(isset($keyword) && $keyword!=""){
            $result = $this->sql_models->searchStr($keyword);
            if($result){
                $k=1;
                foreach ($result as $rs) {
                    $polling_unit_name = ucwords($rs['polling_unit_name']);
                    $city1 = $rs['city1'];
                    $states = $city1;
                    
                    $returnStr = str_replace($this->input->post('keyword'), '<b style="color:#960">'.$this->input->post('keyword').'</b>', $states);

                    echo '<li class="set_item" onclick="set_item(\''.str_replace(array("'"), "\'", $states).'\')"><i class="fa fa-map-marker"></i> &nbsp;'.$returnStr.'</li>';
                    $k++;
                }
            }else{
                echo '<div class="text-center" style="color:#555; padding:0; margin:0 0 0 -20px; font-size: 14.5px !important; line-height: 19px">No records found!</div>';
            }
        }   
    }


    function fetchLGAs(){
        $lga_id = $this->input->post('lga_id');
        $this->fetch_records1($lga_id, "polling_unit");
    }



    function fetch_records1($lga_id, $url_task){

        $fetch_data = $this->sql_models->fetchTables($url_task, $lga_id);
        
        echo '<div class="box-body_ mt-0" style="overflow: hidden !important; width:100%">
            <div class="table-responsive project-table">
                <table id="small_tbl" class="table table-striped table-bordered display responsive wrap all_tables1_" cellspacing="0" role="table">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">Polling Unit No</th>
                            <th role="columnheader">Polling Unit Name</th>
                            <th role="columnheader">Description</th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup">';
                

                        foreach($fetch_data as $row){
                            
                            $polling_unit_number = $row['polling_unit_number'];
                            $polling_unit_name = $row['polling_unit_name'];
                            $entered_by_user = $row['entered_by_user'];
                            $ward_id = $row['ward_id'];
                            $lga_id = $row['lga_id'];
                            
                            $ward_details = $this->sql_models->fetchTbls($ward_id);
                            $no_of_users = $this->sql_models->countUsers($lga_id);
                            
                            $w_name = $ward_details['ward_name'];
                            $w_description = $ward_details['ward_description'];
                            $w_user = $ward_details['entered_by_user'];

                            $ward_dts = "
                            <b>Voters:</b> $no_of_users<br>
                            <b>Ward Name:</b> $w_name<br>
                            <b>Ward Description:</b> $w_description<br>
                            <b>Ward Admin:</b> $w_user<br>
                            ";
                            
                            $polling_unit_name = ucwords(str_replace('gra', 'GRA', $polling_unit_name));
                            $polling_unit_description = $row['polling_unit_description'];

                            if($polling_unit_description=="") $polling_unit_description="<i style='font-weight: normal !important;'>Not specified</i>";
                            
                            $polling_unit_description = ucwords(str_replace('gra', 'GRA', $polling_unit_description));
                            

                            echo "<tr role='row'>
                                <td role='cell'>$polling_unit_number</td>
                                <td role='cell'>$polling_unit_name <p class='ward_details'>$ward_dts</p></td>
                                <td role='cell'>$polling_unit_description</td>
                            </tr>";
                        }

        echo '</table>
            </div>
        </div>';
    }



    function fetch_records(){
        $url_task = $this->uri->segment(3);

        if($url_task=="") $url_task="polling_unit";

        $fetch_data = $this->sql_models->make_datatables($url_task, "");
        $data = array();
        $conts = 1;
        //print_r($fetch_data); exit;
        foreach($fetch_data as $row){   
            $sub_array = array();
            $ids = $row->uniqueid;
            // $nows = substr(time(), -5);
            // $ids_hash = $ids.$nows;
            
            if($url_task=="polling_unit"){
                $polling_unit_id = $row->polling_unit_id;
                $polling_unit_number = $row->polling_unit_number;
                $polling_unit_name = $row->polling_unit_name;
                //$lga_name = $row->lga_name;
                $lga_id = $row->lga_id;
                $ward_id = $row->ward_id;
                $admin_name = $row->entered_by_user;
                
                $lga_name = $this->sql_models->fetchLGA($lga_id);
                $count_lga = $this->sql_models->countLGA($lga_id);
                $ward_details = $this->sql_models->fetchTbls($ward_id);
                $no_of_users = $this->sql_models->countUsers($lga_id);
                

                $w_name = $ward_details['ward_name'];
                $w_description = $ward_details['ward_description'];
                $w_user = $ward_details['entered_by_user'];

                //<b>Voters:</b> $no_of_users<br>

                $ward_dts = "
                <b>Ward Name:</b> $w_name<br>
                <b>Ward Admin:</b> $w_user<br>
                ";
                
                $polling_unit_name = str_replace('gra', 'GRA', $polling_unit_name);
                $polling_unit_description = $row->polling_unit_description;
                $polling_unit_description = str_replace('gra', 'GRA', $polling_unit_description);
                if($polling_unit_description=="") $polling_unit_description="<i>Not specified</i>";


                $sub_array[] = $conts;
                $sub_array[] = ucwords($lga_name)." ($count_lga) "."<p class='ward_details'>$ward_dts</p><p class='view_all' lga_name='$lga_name' lga_id='$lga_id' data-toggle='modal' data-target='#modal-center'><a href='javascript:;'>View This Ward</a></p>";
                $sub_array[] = ucwords($polling_unit_name);
                $sub_array[] = ucwords($polling_unit_description);
            }


            $data[] = $sub_array;
            $conts++;
        }

        $output = array(
            "draw"              =>  intval($_POST["draw"]),
            "recordsTotal"      =>  $this->sql_models->get_all_data($url_task, ""),
            "recordsFiltered"   =>  $this->sql_models->get_filtered_data($url_task, ""),
            "data"              =>  $data
        );
        echo json_encode($output);
    }



    /* function filter_sort(){
        $txtsort = $this->input->post('txtsort');
        $url_task="lockers";

        $fetch_data = $this->sql_models->make_datatables($url_task, $txtsort);
        $data = array();
        $conts = 1;
        foreach($fetch_data as $row){   
            $sub_array = array();
            $ids = $row->id1;
            
            if($url_task=="lockers"){
                $titles = $row->titles;
                $descrip = "<font style='line-height:18px'>$row->descrip</font>";
                $descrip2 = $row->descrip2;
                $qty = $row->qty;
                $city1 = $row->city1;
                $state1 = $row->state1;
                $addrs = ucwords(strtolower($row->addrs));
                $locs = "<p style='font-weight:normal!important;font-size:13px;line-height:18px!important;color:#c46e17;margin-top:4px;opacity:0.9'>$addrs</p>";

                if($qty >=1) $qty="$qty Available"; else $qty="None Available";
            }


            if($url_task=="lockers"){
                $sub_array[] = $conts;
                $sub_array[] = ucwords($titles);
                $sub_array[] = $descrip.$locs;
                $sub_array[] = $descrip2;
                $sub_array[] = $qty;
                $sub_array[] = "<font class='btn_rent'>Rent Now</font>";
            }

            $data[] = $sub_array;
            $conts++;
        }

        $output = array(
            "draw"              =>  intval($_POST["draw"]),
            "recordsTotal"      =>  $this->sql_models->get_all_data($url_task, $txtsort),
            "recordsFiltered"   =>  $this->sql_models->get_filtered_data($url_task, $txtsort),
            "data"              =>  $data
        );
        echo json_encode($output);
    } */



}






