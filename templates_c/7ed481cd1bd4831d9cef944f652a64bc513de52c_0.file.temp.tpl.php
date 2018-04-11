<?php
/* Smarty version 3.1.30, created on 2018-01-31 17:00:03
  from "C:\Users\KOPP\Documents\Nouveau dossier\EasyPHP-12.1\www\my portable files\micro blog\templates\temp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71e803152da1_29120350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed481cd1bd4831d9cef944f652a64bc513de52c' => 
    array (
      0 => 'C:\\Users\\KOPP\\Documents\\Nouveau dossier\\EasyPHP-12.1\\www\\my portable files\\micro blog\\templates\\temp.tpl',
      1 => 1517414399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71e803152da1_29120350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row">
		
        
        <form class="form-horizontal" style="padding-top:130px">
<fieldset>

<!-- Form Name -->
<legend>Register Here</legend>


<div id="erreur">
    <p>Champ non conforme !</p>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="prenom" name="textinput" placeholder="Insert your First Name" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input id="nom" name="textinput" placeholder="Insert your Last Name" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="email" name="textinput" placeholder="Insert your Email" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="mdp" name="textinput" placeholder="Insert your Password" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Confirm Password</label>  
  <div class="col-md-4">
  <input id="cmdp" name="textinput" placeholder="Confirm your Password" class="form-control input-md" required="" type="text">
  <span class="help-block"> </span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"> </label>
  <div class="col-md-4">
    <button id="reset" type="reset" name="singlebutton" class="btn ">Refresh</button>
  </div>
</div>

</fieldset>
</form>
  
	</div>
</div>

<?php }
}
