@extends('layouts/admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">


<h2>Edit Museum</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="museums.php"><i class="bi bi-arrow-bar-left"></i> Return to Museum List</a></p>

<form method="post" action="/museum/edit/<?= $museum->id ?>" novalidate enctype="multipart/form-data">
<?= csrf_field()?>
    <input class="form-control" type="text" name="name" id="name" value="<?= $museum->name?>" required>
        <?php if($errors->first('name')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('name')?></span>
        <?php endif;?>
  <br>
  
  <label class="form-label" for="address">Address:</label>
        <input class="form-control" type="text" name="address" id="address" value="<?= $museum->address?>" required>
        <?php if($errors->first('address')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('address')?></span>
        <?php endif;?>
  <br>
  <label class="form-label" for="postalcode">Postal Code:</label>
  <input class="form-control" type="text" name="postalcode" id="postalcode" value="<?= $museum->postalcode?>">
  
  <br>
  
  <label class="form-label" for="type">Type:</label>
        <input class="form-control" type="text" name="type" id="type" value="<?= $museum->type?>">
        <?php if($errors->first('type')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('type')?></span>
        <?php endif;?>
  <br>
  
  <label class="form-label" for="summary">Summary:</label>
        <input class="form-control" type="text" name="summary" id="summary" value="<?= $museum->summary?>">
        <?php if($errors->first('summary')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('summary')?></span>
        <?php endif;?>
        <br>

        <label class="form-label" for="phone">Phone Number:</label>
        <input class="form-control" type="text" name="phone" id="phone" value="<?= $museum->phone?>">
        <?php if($errors->first('phone')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('phone')?></span>
        <?php endif;?>
        <br>

        <label class="form-label" for="url">Website:</label>
        <input class="form-control" type="text" name="url" id="url" value="<?= $museum->url?>">
        <?php if($errors->first('url')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('url')?></span>
        <?php endif;?>
        <br>

        <label class="form-label" for="ward">Ward:</label>
        <input class="form-control" type="text" name="ward" id="ward" value="<?= $museum->url?>">
        <?php if($errors->first('ward')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('ward')?></span>
        <?php endif;?>
        <br>
        <?php if($museum->image):?>
        <p>
          <img src="{{asset($museum->image)}}" width="200" height="200">
        </p>
        <?php endif;?>
        <label class="form-label" for="ward">Upload Photo</label>
        <input  class="form-control" type="file" name="image" id="image" value="<?= $museum->image?>">
        
  
  <input class="btn btn-secondary text-white" type="submit" value="Edit Museum">
  
</form>
</div>
  </div>
</div>
@endsection