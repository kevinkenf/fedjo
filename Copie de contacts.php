<?php require_once('Connections/bd.php'); 
?>
<?php
$date = date("Y-m-d H:i:s");
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO contact (nom, email, ville, pays, message, `date`) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nom'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['ville'], "text"),
                       GetSQLValueString($_POST['pays'], "text"),
                       GetSQLValueString($_POST['message'], "text"),
                       GetSQLValueString($_POST['date'], "date"));

  mysql_select_db($database_bd, $bd);
  $Result1 = mysql_query($insertSQL, $bd) or die(mysql_error());

  $insertGoTo = "contacts.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_bd, $bd);
$query_livre = "SELECT * FROM contact ORDER BY id DESC";
$livre = mysql_query($query_livre, $bd) or die(mysql_error());
$row_livre = mysql_fetch_assoc($livre);
$totalRows_livre = mysql_num_rows($livre);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="sub-pages">
   <header>                   	
      <h1><a href="index.html"><img src="images/logofj.png" alt=""></a></h1> 
      <nav>  
        <ul class="menu">
        <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li><a href="index.html">Home</a></li>
              <li><a href="wedding.html">Mariage</a></li>
              <li><a href="album.php">Album</a></li>
              <li><a href="wishes.html">Vos Voeux</a></li>
              <li  class="current"><a href="contacts.php">contacts</a></li>
          </ul>
      </nav>
    </header> 
</div>     
  <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. July 30, 2012!</div>
    	<div class="container_24">
        	<div class="grid_6 suffix_1">
            	<div class="top-1">
                    <h4 class="h4-border"><strong>Contact</strong> info:</h4>
					<dl class="adr">
                        <dt class="clr-1"><strong>Joelle &amp; Florent</strong></dt>
                        <dd class="line-height">Gillitzerstr. 12, 83022 Rosenheim</dd>
                        <dd><span>Telephone 1:</span><strong class="clr-2">+49 176 61 97 21 46</strong></dd>
                        <dd class="p1"><span>Email:</span><a href="mailto:florentfedjo@yahoo.fr" class="link">florent@fedjo.de</a></dd>
                        <dd><span>Telephone 2:</span><strong class="clr-2">+49 157 58 49 79 32</strong></dd>
                        <dd>&nbsp;</dd>
                        <dd><span>Email:</span><a href="mailto:ntjsandy87@yahoo.fr" class="link">joelle@fedjo.de</a></dd>
                    </dl> 
			  </div>
    		</div>  
            <div class="grid_1">
            	<div class="line-5">&nbsp;</div>
            </div>
            <div class="grid_16">
              
              <h4 class="h4-border"><strong>Livre</strong> d'or:</h4>
              <form action="<?php echo $editFormAction; ?>" method="POST" name="form" id="form">
              <fieldset>
                  <label><strong>Nom*:</strong><input name="nom" type="text" id="nom" size="1" required=""  x-moz-errormessage="case obligatoire">
                  <strong class="clear"></strong></label>
                  <label><strong>Email*:</strong><input name="email" type="text" id="email" size="1" required=""  x-moz-errormessage="case obligatoire">
                  <strong class="clear"></strong></label>
                  <label><strong>Ville*:</strong><input name="ville" type="text" id="ville" size="1" required=""  x-moz-errormessage="case obligatoire">
                  <strong class="clear"></strong></label>
                  <label><strong>Pays*:</strong><select tabindex="5" name="pays" id="pays" onChange="update_flag(this)" required=""  x-moz-errormessage="case obligatoire"><option value="" selected="selected">-</option><option value="Afghanistan">Afghanistan</option><option value="Afrique du Sud">Afrique du Sud</option><option value="Albanie">Albanie</option><option value="Algérie">Algérie</option><option value="Allemagne">Allemagne</option><option value="American Samoa">American Samoa</option><option value="Andorre">Andorre</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctique">Antarctique</option><option value="Antigua et Barbuda">Antigua et Barbuda</option><option value="Antilles Neerlandaises">Antilles Neerlandaises</option><option value="Arabie Saoudite">Arabie Saoudite</option><option value="Argentine">Argentine</option><option value="Arménie">Arménie</option><option value="Aruba">Aruba</option><option value="Ascension">Ascension (île)</option><option value="Australie">Australie</option><option value="Autriche">Autriche</option><option value="Azerbaidjan">Azerbaidjan</option><option value="Bahamas">Bahamas</option><option value="Bahrein">Bahrein</option><option value="Bangladesh">Bangladesh</option><option value="Barbade">Barbade</option><option value="Belgique">Belgique</option><option value="Bermudes">Bermudes</option><option value="Bhoutan">Bhoutan</option><option value="Biélorussie">Biélorussie</option><option value="Bolivie">Bolivie</option><option value="Bosnie Herzégovine">Bosnie Herzégovine</option><option value="Botswana">Botswana</option><option value="Bouvet">Bouvet (île)</option><option value="Brunei">Brunei</option><option value="Brésil">Brésil</option><option value="Bulgarie">Bulgarie</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Bélize">Bélize</option><option value="Bénin">Bénin</option><option value="Cambodge">Cambodge</option><option value="Cameroun">Cameroun</option><option value="Canada">Canada</option><option value="Cap Vert">Cap Vert</option><option value="Caïmanes">Caïmanes (îles)</option><option value="Chili">Chili</option><option value="Chine">Chine</option><option value="Christmas">Christmas (île)</option><option value="Chypre">Chypre</option><option value="Cocos">Cocos (Keeling) îles</option><option value="Colombie">Colombie</option><option value="Comores">Comores</option><option value="Cook">Cook (îles)</option><option value="Corée du nord">Corée du nord</option><option value="Corée du sud">Corée du sud</option><option value="Costa Rica">Costa Rica</option><option value="Croatie">Croatie</option><option value="Cuba">Cuba</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Danemark">Danemark</option><option value="Djibouti">Djibouti</option><option value="Dominique">Dominique</option><option value="Egypte">Egypte</option><option value="Emirats Arabes Unis">Emirats Arabes Unis</option><option value="Equateur">Equateur</option><option value="Erythrée">Erythrée</option><option value="Espagne">Espagne</option><option value="Estonie">Estonie</option><option value="Etats-Unis">Etats-Unis</option><option value="Ethiopie">Ethiopie</option><option value="Ex U.R.S.S.">Ex U.R.S.S.</option><option value="Falkland">Falkland (Malouines) îles</option><option value="Faroe">Faroe (îles)</option><option value="Fidji">Fidji</option><option value="Finlande">Finlande</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambie">Gambie</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Grande Bretagne">Grande Bretagne</option><option value="Grenade">Grenade</option><option value="Groenland">Groenland</option><option value="Grèce">Grèce</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinée">Guinée</option><option value="Guinée Equatoriale">Guinée Equatoriale</option><option value="Guinée-Bissau">Guinée-Bissau</option><option value="Guyana">Guyana</option><option value="Guyane Française">Guyane Française</option><option value="Géorgie">Géorgie</option><option value="Géorgie du sud">Géorgie du sud</option><option value="Haiti">Haiti</option><option value="Heard et McDonald">Heard et McDonald (îles)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hongrie">Hongrie</option><option value="Ile de Man">Ile de Man</option><option value="Inde">Inde</option><option value="Indonésie">Indonésie</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Irlande">Irlande</option><option value="Islande">Islande</option><option value="Israël">Israël</option><option value="Italie">Italie</option><option value="Jamaïque">Jamaïque</option><option value="Japon">Japon</option><option value="Jersey">Jersey</option><option value="Jordanie">Jordanie</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kirghizistan">Kirghizistan</option><option value="Kiribati">Kiribati</option><option value="Koweït">Koweït</option><option value="Laos">Laos</option><option value="Lesotho">Lesotho</option><option value="Lettonie">Lettonie</option><option value="Liban">Liban</option><option value="Liberia">Liberia</option><option value="Libye">Libye</option><option value="Liechtenstein">Liechtenstein</option><option value="Lituanie">Lituanie</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macédoine">Macédoine</option><option value="Madagascar">Madagascar</option><option value="Malaisie">Malaisie</option><option value="Malawi">Malawi</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malte">Malte</option><option value="Mariannes du nord">Mariannes du nord (îles)</option><option value="Maroc">Maroc</option><option value="Marshall">Marshall (îles)</option><option value="Martinique">Martinique</option><option value="Maurice">Maurice (île)</option><option value="Mauritanie">Mauritanie</option><option value="Mayotte">Mayotte</option><option value="Mexique">Mexique</option><option value="Micronésie">Micronésie</option><option value="Moldavie">Moldavie</option><option value="Monaco">Monaco</option><option value="Mongolie">Mongolie</option><option value="Montserrat">Montserrat</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibie">Namibie</option><option value="nr">Nauru</option><option value="ni">Nicaragua</option><option value="ne">Niger</option><option value="ng">Nigéria</option><option value="Niue">Niue</option><option value="Norfolk">Norfolk (île)</option><option value="Norvège">Norvège</option><option value="Nouvelle Calédonie">Nouvelle Calédonie</option><option value="Nouvelle Zélande">Nouvelle Zélande</option><option value="Népal">Népal</option><option value="Oman">Oman</option><option value="Ouganda">Ouganda</option><option value="Ouzbékistan">Ouzbékistan</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papouasie Nvelle Guinée">Papouasie Nvelle Guinée</option><option value="Paraguay">Paraguay</option><option value="Pays Bas">Pays Bas</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn (île)</option><option value="Pologne">Pologne</option><option value="Polynésie Française">Polynésie Française</option><option value="Porto Rico">Porto Rico</option><option value="Portugal">Portugal</option><option value="Pérou">Pérou</option><option value="Qatar">Qatar</option><option value="Roumanie">Roumanie</option><option value="Royaume Uni">Royaume Uni</option><option value="Russie">Russie</option><option value="Rwanda">Rwanda</option><option value="Rép Centrafricaine">Rép Centrafricaine</option><option value="Rép Dominicaine">Rép Dominicaine</option><option value="Rép. Dém. du Congo">Rép. Dém. du Congo (ex Zaïre)</option><option value="Rép. du Congo">Rép. du Congo</option><option value="Réunion">Réunion (île de la)</option><option value="Sahara Occidental">Sahara Occidental</option><option value="Saint Kitts et Nevis">Saint Kitts et Nevis</option><option value="Saint-Marin">Saint-Marin</option><option value="Sainte Lucie">Sainte Lucie</option><option value="Salomon">Salomon (îles)</option><option value="Salvador">Salvador</option><option value="Sao Tome et Principe">Sao Tome et Principe</option><option value="Serbie">Serbie</option><option value="Serbie Montenegro">Serbie Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapour">Singapour</option><option value="Slovaquie">Slovaquie</option><option value="Slovénie">Slovénie</option><option value="Somalie">Somalie</option><option value="Soudan">Soudan</option><option value="Sri Lanka">Sri Lanka</option><option value="St Vincent et les Grenadines">St Vincent et les Grenadines</option><option value="St. Hélène">St. Hélène</option><option value="St. Pierre et Miquelon">St. Pierre et Miquelon</option><option value="Suisse">Suisse</option><option value="Suriname">Suriname</option><option value="Suède">Suède</option><option value="Svalbard/Jan Mayen">Svalbard/Jan Mayen (îles)</option><option value="Swaziland">Swaziland</option><option value="Syrie">Syrie</option><option value="Sénégal">Sénégal</option><option value="Tadjikistan">Tadjikistan</option><option value="Taiwan">Taiwan</option><option value="Tanzanie">Tanzanie</option><option value="Tchad">Tchad</option><option value="Tchéquie">Tchéquie</option><option value="Ter. Brit. Océan Indien">Ter. Brit. Océan Indien</option><option value="Territoires Fr du sud">Territoires Fr du sud</option><option value="Thailande">Thailande</option><option value="Timor Oriental">Timor Oriental</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinité et Tobago">Trinité et Tobago</option><option value="Tunisie">Tunisie</option><option value="Turkménistan">Turkménistan</option><option value="Turks et Caïques">Turks et Caïques (îles)</option><option value="Turquie">Turquie</option><option value="Tuvalu">Tuvalu</option><option value="US Minor Outlying">US Minor Outlying (îles)</option><option value="Ukraine">Ukraine</option><option value="Uruguay">Uruguay</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vierges Brit.">Vierges Brit. (îles)</option><option value="Vierges USA">Vierges USA (îles)</option><option value="Viêt Nam">Viêt Nam</option><option value="Wallis et Futuna">Wallis et Futuna (îles)</option><option value="Western Samoa">Western Samoa</option><option value="Yemen">Yemen</option><option value="Yugoslavie">Yugoslavie</option><option value="Zambie">Zambie</option><option value="Zimbabwe">Zimbabwe</option></select></label>
                  <label><strong>Message*:</strong><textarea name="message" id="message" required=""  x-moz-errormessage="Dies ist ein Pflichtfeld."></textarea>
                  <strong class="clear"></strong></label>
                  <strong class="clear"></strong><br>
                  <div class="btns"><input type="submit" value="Envoyer"></div>
                  <input name="date" type="hidden" value="<?php echo $date;?>">
                </fieldset>  
                <input type="hidden" name="MM_insert" value="form">
              </form>
        </div>        
            <div class="clear"></div>
            <br><br>
          <h4 class="h4-border"><strong></strong>Messages :  </h4>
            
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
               <?php do { ?> <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong><?php echo $row_livre['nom']; ?>&nbsp;(<?php echo $row_livre['ville']; ?>,&nbsp;<?php echo $row_livre['pays']; ?>)&nbsp;<a href="mailto:<?php echo $row_livre['email']; ?>"><img src="images/mail.gif" ></a></strong></td>
      <td align="right"><?php echo $row_livre['date']; ?></td>
    </tr>
  </table></td>
    </tr>
                <tr>
                  <td>&nbsp;</td>
    </tr>
                <tr>
                  <td><?php echo $row_livre['message']; ?></td>
    </tr>
                <tr align="right" bgcolor="#FFFFFF">
                  <td colspan="" align="center"><hr size=1px color=#cccccc></td>
                </tr><?php } while ($row_livre = mysql_fetch_assoc($livre)); ?>
                  </table>
              </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
  <audio controls="controls" preload="true">
  <source src="mp3/mariage.mp3" type="audio/mp3" />
  Votre navigateur n'est pas compatible
</audio>
      <p><strong>© 2016  Joelle &amp; Florent</strong><br> <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">Website Template</a> created with Templatemonster by <a href="mailto:k_kenfack2000@outlook.com">Kevin Kenfack</a></p>
      
  </footer>	
</body>
</html>
<?php
mysql_free_result($livre);
?>