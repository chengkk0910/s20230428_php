<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Alerts</h2>

    <?php if (!empty($error)) : ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>
    <?php endif; ?>

    <div class="alert alert-success alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>

    <p>The button with class="btn-close" and data-bs-dismiss="alert" is used to close the alert box.</p>
    <p>The alert-dismissible class aligns the button to the right.</p>

    <div class="alert alert-info alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
    </div>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    </div>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    </div>
    <div class="alert alert-primary alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Primary!</strong> Indicates an important action.
    </div>
    <div class="alert alert-secondary alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Secondary!</strong> Indicates a slightly less important action.
    </div>
    <div class="alert alert-dark alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Dark!</strong> Dark grey alert.
    </div>
    <div class="alert alert-light alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Light!</strong> Light grey alert.
    </div>
  </div>

</body>

</html>