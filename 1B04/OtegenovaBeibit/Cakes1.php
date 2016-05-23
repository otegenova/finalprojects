
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Cakes1.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/pudd1.jpg" id="img1"/>
            <a href="#" id="name">Orange Almond Self-Saucing Pudding</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Serves 6</p>
<p> Melted butter, to grease</p>

    <p>1 cup self-raising flour</p>
    <p> 1/2 cup castor sugar </p>
    <p> 1/2 cup almond meal </p>
    <p> 1 tablespoon finely grated orange rind </p>
    <p> 3/4 cup almond milk </p>

<p> 1 egg </p>

    <p>50g butter, melted, cooled</p>
    <p> 1 tablespoon  cornflour <p/>
    <p>1/2 cup castor sugar, extra</p>
    <p>2 cups fresh orange juice</p>
    <p>1 tbsp. Cointreau (or any other orange liqueur, optional)</p>
    <p>Icing sugar, to dust</p>
    

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Preheat oven to 180 degree C (fan-forced 160 degrees C)  Brush a 1.5L (6-cup) capacity oven-proof dish with melted butter. Place on a baking tray lined with non-stick baking paper. Sift flour into a large bowl. Stir in the sugar, almond meal and orange rind.</p>

    <p>Whisk the almond milk, egg and butter in a jug until combined. Add to the flour mixture and use a wooden spoon to stir until smooth and combined. Pour into the prepared dish. Use the back of a spoon to smooth the surface.</p>

<p>Combine cornflour and extra sugar in a bowl. Sprinkle over the pudding mixture. Place orange juice in a small saucepan over medium heat. Bring just to the boil. Remove from heat and add the Cointreau (if using). Gradually pour over the back of a spoon onto the mixture.
Bake for 45-50 minutes or until a cake-like top forms and a skewer inserted halfway into the centre of the pudding comes out clean.</p>

    <p>Set aside for 5 minutes to stand. Dust with icing sugar and serve hot with custard or vanilla ice cream.</p>
    

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
$(this).closest("#cont").find("#img1").attr("src","images/pudd1.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/pudd12.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/pudd13.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/footer.php"); ?>
  


  

</body>
</html>

  