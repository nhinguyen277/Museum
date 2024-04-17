
@extends('layouts/admin')
@section('content');
<div class="container">
  <div class="row">
    <div class="col-sm-12">




<h2>Edit User</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="/user/list"><i class="bi bi-arrow-bar-left"></i> &nbsp;Return to User List</a></p>

<form method="post" action="/user/edit/<?= $user->id ?>" novalidate>
  <?= csrf_field()?>
  <label class="form-label" for="first">First Name:</label>
  <input class="form-control" type="text" name="fname" id="fname" value="<?= $user->fname?>" required>
  
  <?php if($errors->first('fname')): ?>
    <br>
    <span class="text-danger"><?= $errors->first('fname')?></span>
    <?php endif;?>
    <br>
  <label class="form-label" for="last">Last Name:</label>
  <input class="form-control" type="text" name="lname" id="lname" value="<?= $user->lname?>" required>
  <?php if($errors->first('lname')): ?>
    <br>
    <span class="text-danger"><?= $errors->first('lname')?></span>
    <?php endif;?>
    <br>
  
  <label class="form-label" for="email">Email:</label>
  <input class="form-control" type="email" name="email" id="email" value="<?= $user->email?>" required>
    
  <?php if($errors->first('email')): ?>
    <br>
    <span class="text-danger"><?= $errors->first('email')?></span>
    <?php endif;?>
  <br>
  
  <label class="form-label" for="password">Password:</label>
  <input class="form-control" type="password" name="password" id="password" value="<?= $user->password?>"required>
  
  <?php if($errors->first('password')): ?>
    <br>
    <span class="text-danger"><?= $errors->first('password')?></span>
    <?php endif;?>
  <br>
  
  <label for="active">Active:</label>
  <?php
  
  $values = array( 'Yes', 'No' );
  
  echo '<select name="active" id="active">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    if( $value == $user->active ) echo ' selected="selected"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input class="btn btn-secondary text-white" type="submit">
  
</form>

</div>
  </div>
</div>
@endsection