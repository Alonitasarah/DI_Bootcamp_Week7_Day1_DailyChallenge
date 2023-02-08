<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class User 
     {
      public $firstName = "Sarah";

      public function __construct($f)
      {
        $this->firstName = $f;
      }

       function Hello()
       {
        return ("Hello ". $this->firstName);
       }
      }
      function test()
      {
         $firstname = "Jonnie";
         $lasstname = "Roe";
         $user1 = new User($firstname);
         echo $user1->Hello();
      }
    
     test();
    ?>
</body>
</html>