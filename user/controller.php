  <?php
  // Navbar
  include_once("_navbar.php");

  // Controller
  if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
      case 'home':
        include_once("./home/index.php");
        break;
      case 'detail':
        include_once("./detail.php");
        break;
      case 'shop':
        include_once("./shop.php");
        break;
      case 'contact':
        include_once("./contact.php");
        break;
      case 'cart':
        include_once("./cart.php");
        break;
      case 'checkout':
        include_once("./checkout.php");
        break;
    }
  } else {
    include_once("./home/index.php");
  }

  // Footer
  include_once("_footer.php");
  ?>

