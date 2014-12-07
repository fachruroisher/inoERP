<div id="all_contents">
 <div id="content_left"></div>
 <div id="content_right">
  <div id="content_right_left">
   <div id="content_top"></div>
   <div id="content">
    <div id="structure">
     <div id="extn_contact_divId">
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
       <form action=""  method="post" id="extn_contact"  name="extn_contact"><span class="heading">Contact </span>
        <div id ="form_header">
         <div id="tabsHeader">
          <ul class="tabMain">
           <li><a href="#tabsHeader-1">Basic Info</a></li>
           <li><a href="#tabsHeader-2">Attachments</a></li>
           <li><a href="#tabsHeader-3">Notes</a></li>
          </ul>
          <div class="tabContainer"> 
           <div id="tabsHeader-1" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li> 
               <label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="extn_contact_id select_popup clickable">
                Contact Id : </label><?php $f->text_field_dsr('extn_contact_id') ?>
               <a name="show" href="form.php?class_name=extn_contact" class="show extn_contact_id">	<img src="<?php echo HOME_URL; ?>themes/images/refresh.png" class="clickable"></a> 
              </li>
              <li><label>Contact Name :</label><?php $f->text_field_dm('contact_name'); ?> 					</li>
              <li><label>Last Name :</label><?php $f->text_field_dm('last_name'); ?> 					</li>
              <li><label>First Name :</label><?php $f->text_field_d('first_name'); ?> 					</li>
              <li><label>Middle Name :</label><?php $f->text_field_d('middle_name'); ?> 					</li>
              <li><label>e-Mail :</label><?php $f->text_field_d('email_id'); ?> 					</li>
              <li><label>Job Title :</label><?php $f->text_field_d('job_titile'); ?> 					</li>
              <li><label>Contact Type :</label><?php $f->text_field_d('type'); ?> 					</li>
             </ul>
            </div>
           </div>
           <div id="tabsHeader-2" class="tabContent">
            <div> <?php echo ino_attachement($file) ?> </div>
           </div>
           <div id="tabsHeader-3" class="tabContent">
            <div> 
             <div id="comments">
              <div id="comment_list">
               <?php echo!(empty($comments)) ? $comments : ""; ?>
              </div>
              <div id ="display_comment_form">
               <?php
               $reference_table = 'extn_contact';
               $reference_id = $$class->extn_contact_id;
               ?>
              </div>
              <div id="new_comment">
              </div>
             </div>
            </div>
           </div>
          </div>

         </div>
        </div>
        <span class="heading">Other Details </span>
        <div id ="form_line">
         <div id="tabsLine">
          <ul class="tabMain">
           <li><a href="#tabsLine-1">Numbers</a></li>
           <li><a href="#tabsLine-2">Others</a></li>
          </ul>
          <div class="tabContainer"> 
           <div id="tabsLine-1" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li><label>Mobile :</label><?php $f->text_field_d('mobile_number'); ?> 					</li>
              <li><label>Office :</label><?php $f->text_field_d('office_number'); ?> 					</li>
              <li><label>Phone 2 :</label><?php $f->text_field_d('contact_number2'); ?> 					</li>
              <li><label>Fax :</label><?php $f->text_field_dl('fax_no'); ?> 					</li>
             </ul>
            </div>
           </div>
           <div id="tabsLine-2" class="tabContent">
            <div class="large_shadow_box"> 
             <ul class="column four_column"> 
              <li><label>Alternate e-Mail :</label><?php $f->text_field_dl('email_id2'); ?> 					</li>
              <li><label>Time Zone :</label><?php $f->text_field_d('timezone'); ?> 					</li>
              <li><label>Preferred Time :</label><?php $f->text_field_d('time_to_contact'); ?> 					</li>
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
  <li class="headerClassName" data-headerClassName="extn_contact" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="extn_contact_id" ></li>
  <li class="form_header_id" data-form_header_id="extn_contact" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedadeId" data-docHedadeId="extn_contact_id" ></li>
  <li class="btn1DivId" data-btn1DivId="extn_contact_id" ></li>
 </ul>
</div>

<?php include_template('footer.inc') ?>