<?php

/*
 *   Project : Project name
 * 
 *   Author  : Sandeep Giri
 * 
 *   Contact : ioesandeep@gmail.com
 * 
 *   File    : step3.php
 * 
 *   Project : saffersmall
 */

/*
 *   <Saffersmall :: Online Ads and Marketing Directory.>
 *   Copyright (C) <2014>  <Sandeep Giri>

 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.

 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.

 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.

 *   This program comes with ABSOLUTELY NO WARRANTY.
 *   This is free software, and you are welcome to redistribute it only if you 
 *   get permissions from the author or the distributor of this code.
 * 
 *   However do not expect any help or support from the author.
 */

class Step3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        unset($this->model);
        
        $this->load->model('common/common', 'model');
    }

    public function manage() {
        try {
            
            $product = $this->session->userdata('product');
            
            $this->data['class'] = 'placead';
            
            if(empty($product)){
                
                throw new Exception('Direct access to this page is prohibited. Please follow from step 1.','900');
            }
            
            $data = (object)$this->input->post(NULL, TRUE);
            
            if(isset($data->country) && !empty($data->country)):
                
                if(strtolower($data->country) != 'select a country'){
                    
                    $this->session->set_userdata('country',$data->country);
                }
                
            endif;
                        
            if(isset($data->state) && !empty($data->state)):
                
                if(strtolower($data->state) != 'select a state'){
                    
                    $this->session->set_userdata('state',$data->state);
                }
                
            endif;
            
            if(isset($data->city) && !empty($data->city)):
                
                if(strtolower($data->city) != 'select a city'){
                    
                    $this->session->set_userdata('city',$data->city);
                }
                
            endif;
            
            $this->data['title'] = $this->title('Place AD','Step 3');
            
            $this->page = 'placead/step3';
            
            $this->header = 200;
            
            $this->message = 'Your data saved';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();

            $this->page = 'placead/step2';
        }
    }

}
