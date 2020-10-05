$(document).ready(function () {
  readRecords();
  getOrderSummary();
  getRestaurantInfo();

  $("#addItemBtn").click(function (e) {
    e.preventDefault();

    console.log("Inside add");
    var itemName = $("#itemName").val();
    var itemPrice = $("#itemPrice").val();
    var isveg = $("input[name='isItemVeg']:checked").val();
    console.log(isveg);
    var check = true;

    var dataString =
      "itemName=" + itemName + "&itemPrice=" + itemPrice + "&isveg=" + isveg;

    $.ajax({
      type: "POST",
      data: dataString,
      url: "db/restaurant/addMenuItem.php",
      success: function (data) {
        readRecords();
        alert(data);
      },
    });
    $("html").removeClass("log-popup-active");
    clearfields();
  });

  $("#updateItemBtn").click(function (e) {
    e.preventDefault();
    var error = [];
    var i = 0;
    console.log("Inside add");
    var itemName = $("#itemName").val();
    var itemPrice = $("#itemPrice").val();
    var isveg = $("input[name='isItemVeg']:checked").val();
    var itemId = $("#hidden_itemid").val();
    console.log(isveg);
    var check = true;

    var dataString =
      "itemName=" +
      itemName +
      "&itemPrice=" +
      itemPrice +
      "&isveg=" +
      isveg +
      "&itemId=" +
      itemId;

    $.ajax({
      type: "POST",
      data: dataString,
      url: "db/restaurant/editMenuItem.php",
      success: function (data) {
        readRecords();
        alert(data);
      },
    });

    $("html").removeClass("log-popup-active");
    clearfields();
  });
});

function readRecords() {
  $.get("./db/restaurant/restMenu.php", {}, function (data, status) {
    $(".records_content").html(data);
  });
}

function DeleteItem(id) {
  console.log("Inside edu delete");
  var dataString1 = "itemId=" + id;
  $.ajax({
    type: "POST",
    data: dataString1,
    url: "./db/restaurant/delMenuItem.php",
    success: function (data) {
      readRecords();
      alert(data);
    },
  });
}
function GetItems(id) {
  // Add User ID to the hidden field for furture usage
  $("#hidden_itemid").val(id);
  $("html").addClass("log-popup-active");
  $("#addItemBtn").hide();
  $("#updateItemBtn").show();
}

function clearfields() {
  $("#itemName").val("");
  $("#itemPrice").val("");
  $("input[name='isItemVeg'][value='veg']").prop("checked", true);
}

function getOrderSummary() {
  $.get("db/restaurant/restOrder.php", {}, function (data, status) {
    $(".order_content").html(data);
  });
}
function getRestaurantInfo() {
  $.get("db/restaurant/restInfo.php", {}, function (data, status) {
    $(".restinfo_content").html(data);
  });
}
