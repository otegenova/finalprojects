
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Chocolate2.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/choc2.jpg" id="img1"/>
            <a href="#" id="name">Chocolate Covered lemon Meringue Truffles</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Yields 12 medium-sized truffles</p>
<p>250 g white chocolate (roughly chopped)</p>

    <p>1/3 cup thickened/heavy cream</p>
    <p> 1 tbsp finely grated lemon zest </p>
    <p> 1/2 cup meringue (home-made or store-bought), crushed </p>
    <p> 200 g good quality dark chocolate (Lindt 85% cocoa), roughly chopped </p>
    <p> sugar flowers/sprinkles to decorate.</p>


</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Place the white chocolate and cream in a medium heatproof bowl that is placed over a saucepan of simmering water (make sure the bowl doesn’t touch the water over medium heat). Use a metal spoon to stir the mixture gently till the white chocolate has melted and the mixture is smooth..</p>

    <p>Carefully remove the bowl from the pan and stir in the lemon rind. Let the mixture cool down to luke warm before adding in the crushed meringue. (If the mixture starts to set before adding the meringue, put it back on the saucepan to warm up and loosen slightly). Stir to mix. Cover with plastic wrap and place in the fridge for 30 minutes to chill.</p>
    <p>Line a tray with baking paper. Remove the lemon-meringue mixture from fridge and scoop out balls with the help of a teaspoon and then quickly and gently roll out between the palms of your hands. (You will need to do it swiftly as the warmth from your hands could melt the chocolate). Place the truffle balls on the baking paper. Refrigerate again for 30 minutes.</p>
    <p>Melt the dark chocolate in a heatproof bowl over a saucepan of simmering water. Remove from heat and leave aside to cool slightly. Dip the lemon-meringue truffle balls in dark chocolate (allowing the excess to drip off) and place them quickly back on the tray lined with baking paper. Place the sugar flowers or coat them again in sprinkles. Refrigerate till chocolate is set.</p>
    

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
$(this).closest("#cont").find("#img1").attr("src","images/choc2.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/choc22.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/choc23.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>


  

</body>
</html>

  