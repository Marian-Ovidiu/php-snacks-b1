<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $newText = '';
      for ($i=0 ; $i < strlen($text); $i++ ) {
         if ($text[$i] === '.'){ ?>
           <p><?php echo $newText . '.';?></p>
           <?php
            $newText = '';
            $newText .= $text[$i + 1];?>
           <br><p><?php echo $newText; ?></p>
         <?php } else {
           $newText .= $text[$i]; ?>

        <?php } ?>
    <?php } ?>


  </body>
</html>
