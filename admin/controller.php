<?php
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'dashboard':
      include("dashboard.php");
      break;

      // Category
    case 'listCategory':
      include("category/list-category.php");
      break;
    case 'addCategory':
      include("category/add-category.php");
      break;
    case 'updateCate':
      include("category/update-category.php");
      break;

      //Product
    case 'listProduct':
      include("product/list-product.php");
      break;
    case 'addProduct':
      include("product/add-product.php");
      break;
    case 'updateProduct':
      include("product/update-product.php");
      break;

      // User
    case 'listUser':
      include("user/list-user.php");
      break;
    case 'addUser':
      include("user/add-user.php");
      break;
    case 'updateUser':
      include("user/update-user.php");
      break;

      // Comment
    case 'listCommentPro':
      include("comment/list-comment.php");
      break;
    case 'detailCommentPro':
      include("comment/detail-comment.php");
      break;

      // Order
    case 'listOrder':
      include("order/list-order.php");
      break;
    case 'detailOrder':
      include("order/detail-order.php");
      break;
  }
} else {
  include("dashboard.php");
}
