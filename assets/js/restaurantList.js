$(document).ready(function () {
  getRestaurantList();
  $("#my-menu1").hide();
  $("#restaurant").show();
});

function getRestaurantList() {
  $.get("restList.php", {}, function (data, status) {
    $(".restaurant-list").html(data);
  });
}

function loadRestaurantDishes(restid) {
  dataString = "restid=" + restid;

  $.ajax({
    type: "POST",
    data: dataString,
    url: "db/restaurant/renderRestMenu.php",
    success: function (data) {
      $("#menu-list-content").html(data);
      $("#my-menu1").show();
      $("#restaurant").hide();
    },
  });
}

function orderItem(itemid, restid) {
  dataString = "restid=" + restid + "&itemid=" + itemid;

  console.log(restid);
  $.ajax({
    type: "POST",
    data: dataString,
    url: "db/restaurant/orderFood.php",
    success: function (data) {
      alert(data);
    },
  });
}
