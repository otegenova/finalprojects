

  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/art.css" rel="stylesheet" type="text/css" />

  <div id="cont">
        <div id="content_container">
          <img src="images/ma1.jpg" id="img1"/>
            <a href="#" id="nname">Braised Artichokes with Tomatoes and Mint</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:8</p>
<p> 1 28-ounce can whole peeled tomatoes, preferably Italian San Marzano, drained </p>

    <p> 1½ cups dry white wine </p>
    <p> ½ teaspoon crushed red pepper flakes </p>
    <p>  2 teaspoons kosher salt, plus more </p>
    <p> 1 cup olive oil, divided </p>
    <p> 12 salt-packed anchovy fillets, rinsed, patted dry </p>
    <p> 8 garlic cloves </p>
<p> 1 cup (lightly packed) mint leaves </p>
<p> 6 medium artichokes </p>
<p> 2 lemons, halved </p>


</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Place tomatoes in a large Dutch oven or other heavy pot, crushing with your hands; add wine, red pepper flakes, 2 tsp. salt, ½ cup oil, and 2 cups water; set aside.</p>

    <p>Pulse anchovies and garlic in a food processor until finely chopped. Add mint and pulse until coarsely chopped. With the motor running, stream in remaining ½ cup oil; process until a coarse paste forms. Set pesto aside.</p>
    <p>Remove several layers of dark-green outer leaves from artichokes (keep going until you get to the tender light-green leaves). Using a serrated knife, cut off top 1" of artichokes and trim stem ends. Rub cut ends with lemon halves to prevent browning. Working with 1 artichoke at a time, use a paring knife or vegetable peeler to remove tough outer green layer from base and stem to reveal pale-green underneath; rub all over with lemon. Halve through stem and rub cut sides with more lemon. Use a spoon to scoop out choke, then pull out spiky inner leaves; rub insides with lemon. Rub reserved pesto all over artichoke halves and place artichokes in a single layer inside reserved pot, submerging in tomato mixture</p>
    <p>Bring to a simmer over medium-low and cook, turning artichokes occasionally, until hearts are fork-tender, 55–65 minutes. Transfer artichokes to a platter and tent with foil to keep warm.</p>
    <p>Increase heat to medium, bring sauce to a boil, and cook until slightly thickened, 10–15 minutes. Taste and season with more salt if needed. Spoon over artichokes.</p>

</div>
            </div> 
          </div>
      </div>
    </div>
</div>
<script src="jquery-1.12.3.js"></script> 
<script src="jquery.js"></script> 
<script> 
var t = 1; 
$(document).ready(function(){ 
$("#img1").click(function(){ 
if(t==3){ 
$(this).closest("#cont").find("#img1").attr("src","images/ma1.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/ma2.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/muff3.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>
  


  

</body>
</html>