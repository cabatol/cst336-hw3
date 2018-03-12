<?php
    $bg = "";
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $pov = $_POST['pov'];
    $console = $_POST['console'];
    $pc = array(
            array('name' => 'Kingdom Come: Deliverance', 'img' => 'http://i0.kym-cdn.com/entries/icons/mobile/000/025/501/kingdom-come-deliverance-review_1518504610381.jpg', 
                'desc' => 'Kingdom Come: Deliverance is an action role-playing video game developed by Warhorse Studios and published by Deep Silver'),
            array('name' => 'Far Cry 5', 'img' => 'http://www.dlcompare.com:8042/upload/cache/game_tetiere/upload/gameimage/file/35650.jpeg', 
                'desc' => 'Far Cry 5 is an upcoming action-adventure first-person shooter video game developed by Ubisoft Montreal and published by Ubisoft'),
            array('name' => 'Warhammer: Vermintide 2', 'img' => 'https://humblebundle.imgix.net/misc/files/hashed/dc9c0c19dac282ff21a8fa68175a82f740fd5007.jpg?auto=format&fit=crop&w=616&h=353&s=b02191c2c13ec510148b3392e8f34a04', 
                'desc' => 'Warhammer: Vermintide 2 is a first-person action video game developed and published by Fatshark. It is the sequel to the 2015s Warhammer: End Times – Vermintide.'),
            array('name' => 'Darksiders III', 'img' => 'http://cdn2us.denofgeek.com/sites/denofgeekus/files/styles/main_wide/public/2017/05/darksiders-3.jpg?itok=uhRG35Cf', 
                'desc' => 'Darksiders III is an upcoming action-adventure video game being developed by Gunfire Games and will be published by THQ Nordic. It is a sequel to Darksiders II and the third entry in the Darksiders series.'),
            array('name' => 'Anthem', 'img' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/863000/620x/Anthem-Release-date-Game-trailer-2018-updates-and-news-for-EA-s-PS4-Xbox-Destiny-rival-671412.jpg', 
                'desc' => 'Anthem is an upcoming online multiplayer action role-playing video game being developed by BioWare and published by Electronic Arts.'),
            array('name' => 'Vampyr', 'img' => 'https://humblebundle.imgix.net/misc/files/hashed/83b13658f32fedd861793cb756f265895c63ec92.jpg?auto=format&fit=crop&w=616&h=353&s=bd04a52c5c06576e285868d10160083c', 
                'desc' => 'Vampyr is an upcoming action role-playing video game developed by Dontnod Entertainment and published by Focus Home Interactive.')
    ); 
    $ps = array(
            array('name' => 'Death Stranding', 'img' => 'http://cdn3-www.playstationlifestyle.net/assets/uploads/2017/12/Death-Stranding-progress-Dengeki-Kojima-interview-555x328.jpg', 
                'desc' => 'Death Stranding is an upcoming action game developed by Kojima Productions and published by Sony Interactive Entertainment'),
            array('name' => 'Far Cry 5', 'img' => 'http://www.dlcompare.com:8042/upload/cache/game_tetiere/upload/gameimage/file/35650.jpeg', 
                'desc' => 'Far Cry 5 is an upcoming action-adventure first-person shooter video game developed by Ubisoft Montreal and published by Ubisoft'),
            array('name' => 'Detroit: Become Human', 'img' => 'https://orig00.deviantart.net/e115/f/2015/301/a/c/detroit__become_human___fan_made_cover_art_by_benoski-d9enqy2.jpg', 
                'desc' => 'Detroit: Become Human is an upcoming action-adventure game developed by Quantic Dream and published by Sony Interactive Entertainment'),
            array('name' => 'God of War', 'img' => 'https://static.gamespot.com/uploads/scale_medium/536/5360430/3080727-godofwar.jpg', 
                'desc' => 'God of War is an action-adventure, hack and slash, mythology-based video game series, originally created by David Jaffe at Sonys Santa Monica Studio.'),
            array('name' => 'Anthem', 'img' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/863000/620x/Anthem-Release-date-Game-trailer-2018-updates-and-news-for-EA-s-PS4-Xbox-Destiny-rival-671412.jpg', 
                'desc' => 'Anthem is an upcoming online multiplayer action role-playing video game being developed by BioWare and published by Electronic Arts.'),
            array('name' => 'Kingdom Hearts III', 'img' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/45000/620x/Kingdom-Hearts-3-Release-Date-News-Confirmed-Worlds-PS4-Pro-and-Xbox-One-updates-679144.jpg', 
                'desc' => 'Kingdom Hearts III is an upcoming action role-playing video game developed and published by Square Enix')
    ); 
    $check = 0;
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Video Game Recommendations</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <header>
            <h1>Video Game Recommendations</h1>
        </header>
        <main>
            <div id="question">
            <h3><br>What king of game are you looking for?</h3><br/>
            <form method="post" action="index.php">
              <h3>What is your name?<br></h3>
              <input id="idin" type="text" name="name">
            <h3>Genre:</h3>
                <div id="innder-div" class="custom-select">
                <select name="genre">
                  <option disabled selected>Select Genre</option>
                  <option value="action" >Action/Adventure</option>
                  <option value="shoot">Shooter</option>
                  <option value="rpg">RPG</option>
                </select></div>
            <h3>Point of View</h3>
                <input type="radio" name="pov" value="FirstPerson"> First Person<br>
                <input type="radio" name="pov" value="ThirdPerson"> Third Person<br>

            <h3>Console</h3>
                <input type="checkbox" class="styled-checkbox" name="console" value="ps"> PlayStation<br>
                <input type="checkbox" class="styled-checkbox" name="console" value="pc"> PC<br>
            <br/>
            <input type="submit" value="Submit">
            <br><br>
            </form>
            </div>
            <br/><br/>
            <?php
                if(isset($_POST['name'])){
                    
                    echo "<h3>Results</h3>";
                    echo "<div id='answer'>";
                    echo "Hi " . $name . ", I recommend checking out<br/><br/>";
                    
                    if($genre == "shoot"){
                        $check++;
                    }
                    else if($genre == "rpg"){
                        $check+=2;
                    }
                    if($pov == "ThirdPerson"){
                        $check+=3;
                    }
                    
                    if($console == "ps"){
                        echo "<h2>" . $ps[$check]['name'] . "</h2>";
                        echo "<img id='pic' src ='" . $ps[$check]['img'] . "'/><br/>";
                        echo $ps[$check]['desc'];
                    }
                    else{
                        echo "<h2>" . $pc[$check]['name'] . "</h2>";
                        echo "<img id='pic' src ='" . $pc[$check]['img'] . "'/><br/>";
                        echo $pc[$check]['desc'];
                    }
                    echo "<br/><br/></div>";    
                    
                }
            ?>
        </main>
        <footer>
           <br><br>
            <hr>
            CST336 - Internet Programming. 2018&copy; Abatol <br>
            <p><strong>Disclaimer:</strong> The information in this webpage is used for academic purpose only.</p>
            <p><img id="logo" src="https://www.prepsportswear.com/media/images/college_logos/300x300/1749151_mktg_logo.png" alt="logo"/></p>
        </footer> 
    </body>
</html>