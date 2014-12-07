<div id="all_contents">
 <div id="content_left"></div>
 <div id="content_right">
  <div id="content_right_left">
   <div id="content_top"></div>
   <div id="content">
    <div id="structure">
     <div id="sd_lead_divId">
      <div id="form_top">
      </div>
      <!--    START OF FORM HEADER-->
      <div class="error"></div><div id="loading"></div>
      <div class="show_loading_small"></div>
      <?php
      echo (!empty($show_message)) ? $show_message : "";
      $f = new inoform();
      ?> 
      <!--    End of place for showing error messages-->
      <div id ="form_header">
       <form action=""  method="post" id="sd_lead"  name="sd_lead"><span class="heading">Sales Lead </span>
        <div id ="form_header">
         <div id="tabsHeader">
          <ul class="tabMain">
           <li><a href="#tabsHeader-1">Basic Info</a></li>
           <li><a href="#tabsHeader-2">New Contact</a></li>
           <li><a href="#tabsHeader-3">Attachments</a></li>
           <li><a href="#tabsHeader-4">Notes</a></li>
           <li><a href="#tabsHeader-5">Action</a></li>
          </ul>
          <div class="tabContainer"> 
           <div id="tabsHeader-1" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li> 
               <label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="sd_lead_id select_popup clickable">
                Lead Id : </label><?php $f->text_field_dsr('sd_lead_id') ?>
               <a name="show" href="form.php?class_name=sd_lead" class="show sd_lead_id">	<img src="<?php echo HOME_URL; ?>themes/images/refresh.png" class="clickable"></a> 
              </li>
              <li><label>Lead Number :</label><?php $f->text_field_dm('lead_number'); ?> 					</li>
              <li><label>Lead Subject :</label><?php $f->text_field_dm('lead_subject'); ?> 					</li>
              <li><label>Lead Type :</label><?php $f->text_field_d('lead_type'); ?> 					</li>
              <li><label>Status :</label><?php $f->text_field_d('status'); ?> 					</li>
              <li><label>Priority :</label><?php $f->text_field_d('priority'); ?> 					</li>
              <li><label>Referral Source:</label><?php $f->text_field_d('referral_source'); ?> 					</li>
              <li><label>Sales Channel:</label><?php 
              echo $f->select_field_from_object('sales_channel', sd_lead::sales_channel(),'option_line_code','option_line_value', $$class->sales_channel,'sales_channel'); ?> 					</li>
              <li><label>Description :</label><?php $f->text_field_dl('lead_description'); ?> 					</li>
             </ul>
            </div>
           </div>
           <div id="tabsHeader-2" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li><label>Last Name :</label><?php $f->text_field_d('last_name'); ?> 					</li>
              <li><label>First Name :</label><?php $f->text_field_d('first_name'); ?> 					</li>
              <li><label>Mobile :</label><?php $f->text_field_d('mobile_number'); ?> 					</li>
              <li><label>Office :</label><?php $f->text_field_d('office_number'); ?> 					</li>
              <li><label>Fax :</label><?php $f->text_field_d('fax_no'); ?> 					</li>
              <li><label>e-Mail :</label><?php $f->text_field_d('email_id'); ?> 					</li>
              <li><label>Time Zone :</label><?php $f->text_field_d('timezone'); ?> 					</li>
              <li><label>Preferred Time :</label><?php $f->text_field_d('time_to_contact'); ?> 					</li>
              <li><label>Web site :</label><?php $f->text_field_d('contact_website'); ?> 					</li>
              <li><label>Address :</label><?php $f->text_field_dl('contact_address'); ?> 					</li>
             </ul>
            </div>
           </div>
           <div id="tabsHeader-3" class="tabContent">
            <div> <?php echo ino_attachement($file) ?> </div>
           </div>
           <div id="tabsHeader-4" class="tabContent">
            <div> 
             <div id="comments">
              <div id="comment_list">
               <?php echo!(empty($comments)) ? $comments : ""; ?>
              </div>
              <div id ="display_comment_form">
               <?php
               $reference_table = 'sd_lead';
               $reference_id = $$class->sd_lead_id;
               ?>
              </div>
              <div id="new_comment">
              </div>
             </div>
            </div>
           </div>
           <div id="tabsHeader-5" class="tabContent">
            <div> 
             <ul class="column four_column">
              <li><label>Action</label>
               <?php
               echo $f->select_field_from_array('action', $$class->action_a, '', 'action');
               ?>
              </li>
              <li><label>Close Reason :</label><?php $f->text_field_d('close_reason'); ?> 					</li>
             </ul>

             <div id="comment" class="shoe_comments">
             </div>
            </div>
           </div>
          </div>

         </div>
        </div>

        <div id ="form_line"><span class="heading">Other Details </span>
         <div id="tabsLine">
          <ul class="tabMain">
           <li><a href="#tabsLine-1">Existing Info</a></li>
           <li><a href="#tabsLine-2">Address Details</a></li>
           <li><a href="#tabsLine-3">Contact</a></li>

          </ul>
          <div class="tabContainer"> 
           <div id="tabsLine-1" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li><?php echo $f->hidden_field_withId('ar_customer_id', $$class->ar_customer_id); ?>
               <label class="auto_complete"><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="ar_customer_id select_popup clickable">
                Customer Name : </label> <?php echo $f->text_field('customer_name', $$class->customer_name, '20', 'customer_name', 'select_customer_name', '', $readonly1); ?></li>
              <li><label class="auto_complete">Customer Number : </label><?php $f->text_field_d('customer_number'); ?></li>
              <li><label>Customer Site : </label>
               <?php echo $f->select_field_from_object('ar_customer_site_id', $customer_site_obj, 'ar_customer_site_id', 'customer_site_name', $$class->ar_customer_site_id, 'ar_customer_site_id', 'ar_customer_site_id', '', $readonly1); ?> </li>
              <li><label>System Campaign:</label><?php $f->text_field_d('campaign_id'); ?> 					</li>
              <li><label>Other Campaign:</label><?php $f->text_field_d('campaign_os'); ?> 					</li>
              <li><label>Sales Team:</label><?php $f->text_field_d('sales_team'); ?> 					</li>
              <li><label>Primary Sales Person:</label><?php $f->text_field_d('sales_person_user_id'); ?> 					</li>
              <li><label> <img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="address_id select_popup clickable">
                Address Id:</label> <input type="text"  name="address_id[]" value="<?php echo ($$class->address_id); ?>" maxlength="50" id="address_id"></li> 
             </ul>
            </div>
           </div>
           <div id="tabsLine-2" class="tabContent">
            <ul class="address inline_list">
             <li><label>Phone  : </label> <?php $f->text_field_dr('phone'); ?></li>
             <li><label>Email  : </label> <?php $f->text_field_dr('website'); ?></li>
             <li><label>Web-site  : </label><?php $f->text_field_dr('website'); ?></li>
             <li><label>Country  : </label><?php $f->text_field_dr('country'); ?></li>
             <li><label>Postal Code  : </label> <?php $f->text_field_dr('postal_code'); ?></li>
             <li><label>Address :</label>  
              <textarea readonly name="address" id="address" cols="22" rows="3" placeholder="Select address Id"><?php echo trim(htmlentities($$class->address)); ?></textarea>
             </li>
            </ul>
           </div>
           <div id="tabsLine-3" class="tabContent">
            <?php
            if (!empty($all_contacts)) {
             include_once HOME_DIR . '/extensions/contact/view/contact_view_template.php';
            }
            ?>
            <div>
             <ul id="new_contact_reference">
              <li class='new_object1'><label><img class="extn_contact_id select_popup clickable"  src="<?php echo HOME_URL; ?>themes/images/serach.png"/>
                Associate Contact : </label>  
               <?php
               echo $f->hidden_field('extn_contact_id_new', '');
               echo $f->text_field('contact_name_new', '', '20', '', 'select_contact');
               ?>  </li>
              <li class='flaticon-add182 clickable' id='add_new_contact' title='New contact reference field'></li>
             </ul>
            </div>
           </div>
          </div>

         </div>
        </div>
       </form>
      </div>
      <!--END OF FORM HEADER-->

     </div>
    </div>
    <!--   end of structure-->
   </div>
   <div id="content_bottom"></div>
  </div>
  <div id="content_right_right"></div>
 </div>

</div>
<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="sd_lead" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="sd_lead_id" ></li>
  <li class="form_header_id" data-form_header_id="sd_lead" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedadeId" data-docHedadeId="sd_lead_id" ></li>
  <li class="btn1DivId" data-btn1DivId="sd_lead_id" ></li>
 </ul>
</div>

<?php include_template('footer.inc') ?>