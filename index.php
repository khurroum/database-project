<?php 

$myData = [
    ["id" => 1, "title" => "Product", "image" => "https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg"],
    ["id" => 2, "title" => "Phone", "image" => "https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg"],
    ["id" => 3, "title" => "Car", "image" => "https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg"],
    ["id" => 4, "title" => "Cover", "image" => "https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg"],
    ["id" => 5, "title" => "Computer", "image" => "https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg"],
    
    // Using the image from the "images" folder for the last item
    ["id" => 6, "title" => "Laptop", "image" => "images/image1.jpg"]
];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="navlogo border">
          <div class="logo"></div>
        </div>

        <div class="navaddress border">
          <p class="deliver">Deliver to</p>
          <div class="icon">
            <i class="fa-solid fa-location-dot"></i>
            <p class="bangladesh">Bangladesh</p>
          </div>
        </div>

        <div class="navsearch">
          <select class="searchselect">
            <option>All</option>
          </select>
          <input placeholder="Search here" class="searchinput" />
          <div class="searchicon">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </div>

        <div class="navsign border">
          <p><span>Hello,sign in</span></p>
          <p class="navelist">Account & Lists</p>
        </div>

        <div class="navreturn border">
          <p><span>Returns</span></p>
          <p class="navelist">& Orders</p>
        </div>

        <div class="cart border">
          <i class="fa-solid fa-cart-shopping"></i>
          cart
        </div>
      </div>

      <div class="panel">
        <div class="panelall">
          <i class="fa-solid fa-bars"></i>
          All
        </div>

        <div class="paneloption">
          <p>Today's Deals</p>
          <p>Customer Service</p>
          <p>Registry</p>
          <p>Gift Cards</p>
          <p>Sell</p>
        </div>

        <div class="paneldeals">Shop deals in Electronics parbez</div>
      </div>
    </header>

    <div class="herosection">
      <div class="heromassage">
        <p>
          This is the best platform for buying and selling in Bangladesh.<a
            >click here to go shopping.</a
          >
        </p>
      </div>
    </div>

    <div class="shopsection ">
      <?php foreach ($myData as $item): ?>
        <div class="box">
          <div class="boxcontent">
            <h2><?php echo $item['title']; ?></h2>
            <div class="boximage">
              <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" />
            </div>
            <button>See more</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>

