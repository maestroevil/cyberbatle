<?
  // include "resource/function/function.php";
  $url = get_language("all");
  include "$url"; 
?>
<div class="modale-background" data='modale1'></div>

<div class="modale">
  <i class="fas fa-times modale-button-close"></i> 
  <div class="content">
    
    <div class="form">
      <p> На данный момент регистрация является закрытой. </p>
      <input type="text" class="input1" name="" placeholder="Никнейм">
      <br>
      <input type="password" class="input1" name="" placeholder="Пароль">
      <br><br>
      <a href='user' class="button2" style="background-color: #f50;">Войти</a>
    </div>   
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="#">cyberbattle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="navbar-nav mr-auto">
          <?
            $menu_main["option1"]["name"] = $main_menu_option1;
            $menu_main["option2"]["name"] = $main_menu_option2;
            $menu_main["option3"]["name"] = $main_menu_option3;
            $menu_main["option4"]["name"] = $main_menu_option4;
            $menu_main["option1"]["url"] = "/".($_GET['lang']  ? "?lang=".$_GET['lang'] : "" );;
            $menu_main["option2"]["url"] = "cooperation.php".($_GET['lang']  ? "/?lang=".$_GET['lang'] : "" );
            $menu_main["option3"]["url"] = "about-project.php".($_GET['lang']  ? "/?lang=".$_GET['lang'] : "" );;
            $menu_main["option4"]["url"] = "contacts.php".($_GET['lang']  ? "/?lang=".$_GET['lang'] : "" );;
            
            foreach ($menu_main as $key => $value) {
              echo "
              <li class='nav-item '>
                <a class='nav-link' href='$value[url]'>$value[name]<span class='sr-only'>(current)</span></a>
              </li>";
            }
        ?>
      </ul>
      <a href="">
        <i class="fab fa-twitch"></i>
      </a>
      <a>
        <i class="fab fa-youtube"></i>
      </a>
      <a>
        <i class="fab fa-facebook"></i>
      </a>
      <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?
              $url = get_language("short");
              echo "<img src='resource/img/$url.png'>";
            ?>
          </button>
          <div class="dropdown-menu">
            <?
              if($url == "ru")
                $url_icon = "en";
              else
                $url_icon = "ru";
              echo "
                <a class='dropdown-item' href='?lang=$url_icon'>
                  <img src='resource/img/$url_icon.png'>
                </a>";
            ?>
      </div>
      </div>
      <?
      // <a class='button2' href='user/index.php'>$main_menu_reg</a>
        echo" 
          <a class='button1 but-open-modale' id='modale1'>$main_menu_enter</a>";
      ?>
      
    </div>
</nav>