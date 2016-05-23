
  <html>
<body>
  <?php include("includes/header.php"); ?>
  <link href="css/Chocolate1.css" rel="stylesheet" type="text/css" />
  <div id="cont">
        <div id="content_container">
        	<img src="images/choc1.jpg" id="img1"/>
            <a href="#" id="name">Double Chocolate Banana Cake</a>    
        </div>
  </div>
  <div id="cont">
      <div id="content_containers">
          <div id="header"> 
            <div class="Ingredients">Ingredients</div> 
            <div id="Servings"><p>Servings:Serves 6-8</p>
<p>50 g butter, at room temperature</p>

    <p>3/4 cup brown sugar </p>
    <p> 3 medium sized over-ripe bananas, mashed </p>
    <p> 1 egg </p>
    <p> 1/3 cup milk </p>
    <p> 1 3/4 cup self-raising flour</p>
    <p> 1/4 cup cocoa, sifted</p>
<p>2 teaspoons ground cinnamon</p>
<p>1/2 cup dark chocolate, roughly chopped into big and small chunks</p>
<p><b>Chocolate Ganache</b></p>
<p>150 g dark chocolate</p>
<p>75 g milk chocolate (or use the entire weight of dark chocolate, 225 g)</p>
<p>1/3 cup heavy or thickened cream</p>


</div>
          </div>
          <div id="header">  
            <div id="Preparation">Preparation</div>
              <div id="prep">
<p>Preheat oven to 180 degrees C. (160 degrees C fan forced). Grease and line the base of a 19 cm round cake pan.</p>

    <p>Beat butter and brown sugar together until pale and creamy. Add banana, egg and milk. Beat together until well combined. Add flour, cocoa, cinnamon and choc chunks and stir until well combined. Spoon into prepared pan and level top. </p>
    <p>Bake for 45 minutes or until a skewer inserted at centre comes out clean and top is golden brown. Stand for 5 minutes in pan, then transfer cake to a wire rack to cool.
Once cooled completely, frost with Chocolate Ganache.</p>
    <p><b>To make the Chocolate Ganache</b> : Place chocolate and cream in a microwave-safe bowl. Microwave on medium for 2 to 3 minutes, stirring every 30 seconds with a metal spoon or until smooth. Alternately, place the ingredients together in a saucepan over low heat. Stir in intervals till smooth and blended.
Stand at room temperature until thickened.</p>
    

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
$(this).closest("#cont").find("#img1").attr("src","images/choc1.jpg"); 
t=1; 
return; 
} 
if(t==2){ 
$(this).closest("#cont").find("#img1").attr("src","images/choc12.jpg"); 
t+=1; 
return; 
} 
if(t == 1){ 
$(this).closest("#cont").find("#img1").attr("src","images/choc13.jpg"); 
t+=1; 
return; 
} 

}); 

}); 
</script>
 <?php include("includes/footer.php"); ?>
  


  

</body>
</html>

  