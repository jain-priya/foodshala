$(document).ready(function () {
  readCustomerInfo();
  getCustomerOrderSummary();
});

function readCustomerInfo() {
  $.get("db/customer/custOrder.php", {}, function (data, status) {
    $(".custorder_content").html(data);
  });
}
function getCustomerOrderSummary() {
  $.get("db/customer/custInfo.php", {}, function (data, status) {
    $(".custinfo_content").html(data);
  });
}
