<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Document</title>
</head>

<body>

<?php require_once "include/navbar.php" ?>
<?php require_once "include/intro.php" ?>


<!-- code section -->
<section>
<div class="min-h-32 bg-blue-100">
<?php
$myname = "proflee";
$welcome = "welcome to my website, ";
?>

<span class="text-blue-500"><?= $myname?></span>
</div>
</section>

   <section>
      <div class="p-8">
         <div class="grid grid-cols-3 gap-4">
            <?php require "components/card.php" ?>
            <?php require "components/card.php" ?>
            <?php require "components/card.php" ?>
            </div>
         </div>
      </div>
   </section>

    <section>
        <div class="p-8 bg-gray-600">
      <div class="text-gray-100 text-2xl mb-8">contact me</div>
      <form class="grid space-y-8" action="/index.html" method="post">
        <input  name="visitor_name" class="rounded p-2 text-lg w-72" type="text" placeholder="please write your name">
        <textarea name="visitor_message" class="rounded p-2 text-lg w-72" placeholder="please write your message"></textarea>
        <button type="submit" class="bg-blue-500 text-gray-100 w-32 rounded p-2 text-lg" >senden</button>
      </form>
    </div>
</section>

    <?php require_once "include/footer.php" ?>

  
</body>

</html>