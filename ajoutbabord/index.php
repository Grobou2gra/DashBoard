<?php 
include("bin/gettable.php");
?>
  <html>
    <head>
      <link rel="stylesheet" href="bin/styleint.css" /> 
      <meta >
      <title>Gestion de code barre</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
  <body>
    <div id="page">
      <h1>Gestion des derniers arrivages</h1>
      <div id="content">
              <div id="ajouter" class="bloc">
        <form name="insertion" action="bin/addlivre.php" method="POST">
          <table>
            <tr>
              <td>Nouveau code barre</td>
              <td>
                <input type="text" name="codebarre">
              </td>
              <td><input type="submit" value="insérer"></td>
          </table>
        </form>
      </div>
   <div id="table" class="bloc">
      <table collapse="0">
        <tr class="tableentete"><td class="tableentete" >Code-barres</td></tr>
      <?php foreach($codes as $cb){ ?>
        <tr collapse="0" class="tabledata">
          <td class="tabledata">
            <span id="code">
              <?php echo $cb['cb']; ?>
            </span>
            <span id="delete">
              <form name="suppression" action="bin/dellivre.php" method="POST">
               <button type="submit" name="supprimer" value="<?php echo $cb['id']; ?>">Supprimer</button>
            </span>
            </form>
          </td>
        </tr>
      <?php } ?>
      </table>
    </div>
      </div>
  </div>
  </body>
  </html>

