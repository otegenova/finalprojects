
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Muffins2.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/muff1.jpg" id="img1"/>
            <a href="#" id="name">Apple Blueberry Muffins</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Makes 12 muffins</p>
<p>2 cups all purpose flour</p>

    <p> 3/4 cup Castor sugar</p>
    <p> 2 tsp baking powder </p>
    <p> 1/2 tsp baking soda</p>
    <p> 2 apples peeled, cored and finely chopped </p>
    <p> 1 cup fresh or frozen blueberries (I used frozen) </p>

<p>1 large egg, lighly beaten</p>

    <p> 2 cups fresh blueberries, divided </p>
    <p> 125 g unsalted butter, melted<p/>
    <p> 1 tsp vanilla extract</p>
    

</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Preheat oven to 190 degrees C./p>

    <p>Lightly grease a muffin tray or line with paper liners.</p>

<p>In a large bowl, combine the flour, sugar, baking powder, baking soda, apples and blueberries.</p>

    <p>In another bowl, mix together the egg, buttermilk, butter and vanilla extract. Gradually fold in the wet ingredients into the dry ingredients with a spatula, taking care not to over mix the batter.</p>
    <p>Spoon the batter into the prepared pan (about 2/3rd full for each muffin) equally. Place in the oven and bake for 20-25 minutes. A toothpick inserted into the centre should come out clean. Transfer to a wire rack and cool for 10 minutes before removing from pan.</p>

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
$(this).closest("#cont").find("#img1").attr("src","images/muff1.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/muff12.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/muff13.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
 <?php include("includes/footer.php"); ?>
  


  

</body>
</html>

  