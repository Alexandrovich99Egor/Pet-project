<div class="flex flex-col items-center justify-center h-svh ">
    <?php function form_register(): string
    {
        return ' <h1 class="text-red-700 text-2xl font-extrabold text-center m-14">Welcome</h1>
    <form class="bg-gradient-to-r
         from-purple-500
          to-pink-500 
          shadow-red-900
          h-96 w-1/3 flex 
          flex-col gap-10 
          rounded-xl items-center
         justify-center border-4
         border-orange-800 
            min-w-80
            hover:bg-gradient-to-r" action="./back/register.php" method="POST">
        <input name="name" type="text" placeholder=" Кто ты воин?"
            class="active:bg-violet-700 focus:outline-none p-2 rounded-md">
        <input name="second_name" type="text" placeholder=" Откуда ты?" class="focus:outline-none p-2 rounded-md">
        <input name="submit" type="submit" placeholder="Отправить"
            class="focus:outline-none text-white border-2 p-2 rounded-md hover:bg-red-700 hover:ease-in">
    </form>';
    }
    echo form_register();
    ?>

</div>

<?php
//Register users php
require_once ('register.php'); ?>