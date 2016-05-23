
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/sa.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
          <img src="images/ma2.jpg" id="img1"/>
            <a href="#" id="name">
Hot Sausage and Crispy Chard Pizza</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredient">Ingredients</div> 
            <div id="Servings"><p>Servings:4</p>
<p> 3 tablespoons olive oil, divided </p>

    <p> ¾ pound hot Italian sausage, casings removed </p>
    <p> 1 bunch Swiss chard, ribs and stems sliced into 1-inch pieces, leaves torn </p>
    <p>Kosher salt, freshly ground pepper</p>
    <p> 1 pound prepared pizza dough, room temperature </p>
    <p> ⅓ cup finely grated Parmesan </p>

<p> 1 tablespoon rosemary leaves </p>

    <p> 1 cup grated Fontina cheese </p>
    <p> 1 cup ricotta <p/>

    

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p><b>active: 30 min total: 1 hrs</b></p>

    <p>Place a rack in upper third of oven and preheat to 450°. Heat 2 Tbsp. oil in a large skillet over medium-high. Add sausage and break into small pieces with a wooden spoon. Let cook, undisturbed, until bottom sides are browned, about 4 minutes. Add chard stems; cook, tossing occasionally, until crisp-tender, about 2 minutes. Transfer sausage and chard stems to a medium bowl with a slotted spoon.</p>

<p>Let skillet and drippings cool until just warm, then add chard leaves, turning to coat. Season with salt and pepper; transfer to bowl with sausage mixture.</p>

    <p>Coat dough with remaining 1 Tbsp. oil and stretch into an 18x12" oval on a large rimmed baking sheet; season with salt and pepper. Top with half of Parmesan and rosemary, followed by sausage mixture, Fontina, ricotta, then remaining Parmesan and rosemary.</p>
    <p>Bake pizza, rotating sheet halfway through, until crust is golden brown and crisp, 18–22 minutes. Let cool 5 minutes.</p>

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
