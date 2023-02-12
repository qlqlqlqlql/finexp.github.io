
   <div class="wrapper">
      <header class="admin-header">
         <div class="admin-header__container">
            <div class="admin-header__logo">
               <img src="image/header/logo_text.svg" alt="Logo">
            </div>
            <div class="admin-header__title">Admin Panel</div>
            <a href="?do=exit" class="admin-header__exit">
               Exit
               <i class="fa-solid fa-door-open"></i>
            </a>
         </div>
      </header>
      <main class="admin-mainblock">
         <table>
            <tr class="admin-main">
                     <th>ID</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Description</th>
                  </tr>
            <?php
               $query3 = "SELECT * FROM azimut ORDER BY id DESC";
               $result3 = $link->query($query3);
               while($news = $result3->fetch_assoc()){?>
                  <tr class="admin-str">
                     <td><?=$news['id']?></td>
                     <td><?=$news['name']?></td>
                     <td><?=$news['phone']?></td>
                     <td><?=$news['description']?></td>
                  </tr>
               <?}
            ?>
         </table>
      </main>
   </div>