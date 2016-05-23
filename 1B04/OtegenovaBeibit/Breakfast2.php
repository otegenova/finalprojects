
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/breakfast2.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
          <img src="images/muff3.jpg" id="img1"/>
            <a href="#" id="nname">Corn, Carrot and Pea Breakfast Fritters</a>    
        </div>
  </div>
   <div id="cont">
      <div id="content_containers">
          <div id="header">  
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings: Makes 12-14 fritters</p>
<p>11/2 cups self-raising flour (or 11/2 cup plain flour +1 tsp baking powder)</p>

    <p>2 eggs, lightly whisked</p>
    <p>1/2 cup milk (more, if required)</p>
    <p>3/4 cup corn kernels (canned or frozen, drain if using canned)</p>
    <p>1 carrot, grated</p>
    <p>3/4 cup frozen peas</p>

<p>1/2 onion, finely chopped</p>

    <p>Herbs- Coriander, Parsley, Mint, finely chopped</p>
    <p>2 tbsp. olive oil<p/>
    <p>Salt and Pepper to taste</p>

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Place the flour in a large bowl and make a well in the centre. Add the egg and milk and stir gently to make a smooth batter. Add more milk if required. It should result in a thick but drop-able consistency. Cover with plastic wrap and set aside for 30 minutes to rest.</p>

    <p>Add the corn, grated carrots, peas, onions and herbs to the batter and stir to combine. Season with salt and pepper.</p>

<p>Heat a little of the olive oil in a large non-stick frying pan over medium heat. Drop 2 tablespoons of batter in the pan for a fritter, fitting in as any fritters in the pan leaving room for spreading. Cook for 1-2 minutes or until bubbles have risen to the surface and the fritter is golden underneath. Turn with a spatula and cook for a further 1-2 minutes or until just cooked through. Transfer to a plate. Repeat in more batches with remaining batter and oil.</p>

    <p>Serve fritters with sour cream or greek yoghurt.</p>
    

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
$(this).closest("#cont").find("#img1").attr("src","images/breakfast2.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/breakfast22.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/breakfast23.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
<?php include("includes/header.php"); ?>
  


  

</body>
</html>
