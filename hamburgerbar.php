  <span class="hamburger_menu_buttonu icon icon-menu" onclick="">


  </span>
  <div class="hamburgerblackarea"></div>

  <div class="hamburgerMenuArea">
      <div class="hUserInf">
          <div class="userInfTextArea">
              <span>Hoşgeldiniz! </span> <br>
              <span style="text-transform: uppercase;"> <?php session_start();
                                                        print_r($_SESSION["name"]) ?></span><br>
              <span>
                    <?php session_start();
                    print_r($_SESSION["storenumber"]) ?> </span>
          </div>
      </div>
      <div class="pagesArea">
          <ul>
              <li id="lihomepage"><a id="homepage" href='homepage.php'><span>Ana Sayfa</span></a></li>
              <li id="lireport"><a id="report" href='bildirim.php'><span>Bildirimler</span></a></li>
              <li id="lidenetim"><a id="denetim" href='ekle.php'><span>Ürün Ekle</span></a></li>
              <li id="liliste"><a id="liste" href='tumu.php'><span>Ürün Listesi</span></a></li>
          </ul>

      </div>
  </div>