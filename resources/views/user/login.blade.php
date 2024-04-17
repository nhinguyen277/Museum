@extends('layouts/user')
@section('content');
<div style="max-width: 400px; margin:auto">
    <h1 class="text-center">Login</h1>
  <form method="post" action="login">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
        <?php if($errors->first('email')):?>
          <br>
          <span class="text-danger"><?= $errors->first('email'); ?> </span>
          <?php endif; ?>
      </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
        <?php if($errors->first('password')):?>
        <br>
        <span class="text-danger"><?= $errors->first('password'); ?> </span>
        <?php endif; ?>
      </div>
  <button type="submit" class="btn btn-secondary btn-md px-4">Login</button>

  </form>
  
</div>
@endsection