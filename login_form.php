<?php  

require_once(dirname( __FILE__ ) . '/scripts.php');

?>

<div class="hidden-print dropdown pull-right menu-login ng-cloak" data-ng-show="isLoggedIn" style="padding-top: 5px" data-ng-class="{ 'open': gvm.loginMenuActive }">
  <a href="javascript:void(0)" data-ng-click="gvm.loginMenuActive = !gvm.loginMenuActive">
    {{profile.FirstName + ' ' + profile.LastName}} <i class="fa fa-caret-down"></i>
  </a>
  <div style="padding:17px;" class="dropdown-menu dropdown-menu-touch">
    <a href="#!/profile"><i class="fa fa-user"></i> Profile </a><br /><br />
    <a href="/">Sign-out</a><br />
  </div>
</div>

<div class="hidden-print dropdown pull-right menu-login" data-ng-if="!isLoggedIn" data-gsn-login="" style="padding-top: 5px" data-ng-class="{ 'open': gvm.loginMenuActive }" >
  <a href="javascript:void(0)" data-ng-click="gvm.loginMenuActive = !gvm.loginMenuActive">
    Sign in <i class="fa fa-caret-down"></i>
  </a>
  <div style="padding:17px; width: 300px" class="dropdown-menu">
    <form role="form" name="myLoginForm" data-ng-submit="login()"> 
        <label>Sign in</label> 
        <input id="usernameField" name="usernameField" type="text" class="form-control" placeholder="Email or username" data-ng-model="profile.UserName" required="required" />
        <input id="passwordField" name="passwordField" type="password" class="form-control" placeholder="Password" data-ng-model="profile.Password" required="required" />
        <div class="form-group" data-ng-show="hasSubmitted && !isValidSubmit">
          <div class="alert alert-danger">
            Email or password is incorrect.
          </div>
        </div> 
        <div data-gsn-spinner="{radius:30, width:8, length: 16}" data-show-if="isSubmitting"></div>
        <button type="submit" class="btn btn-primary pull-right">Sign in</button>
    </form><br />
    <a href="#!/registration">New User? Sign-up..</a><br /><br />
    <a href="javascript:void(0)" class="col-md-6" data-gsn-modal="getThemeUrl('/views/engine/modal-recover-username.html')" data-ng-click="showModal()">Forgot username?</a>
    <a href="javascript:void(0)" class="col-md-6" data-gsn-modal="getThemeUrl('/views/engine/modal-recover-password.html')" data-ng-click="showModal()">password?</a>
  </div>
</div>
