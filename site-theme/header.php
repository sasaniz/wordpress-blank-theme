<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="./script/header.js"></script>
  <script src="./script/footer.js"></script>
  <?php
  wp_head();
  ?>
</head>

<body class="woocommerce">
  <!-- content -->
  <!-- here -->
  <?php
  wp_nav_menu(
    array(
      'menu' => 'primary',
      'container' => '',
      'theme_location' => 'primary'
    )
  );

  ?>
  <?php
  get_search_form();
  ?>