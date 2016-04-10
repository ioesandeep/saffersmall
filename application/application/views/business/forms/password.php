<?php
/*
 *   Project : Project name
 * 
 *   Author  : Sandeep Giri
 * 
 *   Contact : ioesandeep@gmail.com
 * 
 *   File    : password.php
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
?>      
  
<section class="create_account">
    <div class="<?php echo $this->input->is_ajax_request() ? '' : 'container';?>">
        <!--<h2><?php echo strtoupper(DOMAIN); ?> :: Change Password</h2>-->
        <form action="<?php echo base_url();?>dashboard/accounts/change/?target=password" method="post" class="form-horizontal">
            <?php if (isset($response['message'])) { ?>
                <div class="form-group">
                    <strong>The boss says :: <?php echo $response['message']; ?></strong>
                </div>
            <?php } ?>
            <div class="form-group">
                <strong>Your Current Password </strong>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pass_old" placeholder="Current Password" required/>
            </div>
            <div class="form-group">
                <strong>Your New Password</strong>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pass_new_1" placeholder="New Password" required/>
            </div>
            <div class="form-group">
                <strong>New Password Again</strong>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pass_new_2" placeholder="New Password Again" required/>
            </div>
            <div class="form-group">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</section>