$(document).ready(function () {
  var DOMAIN = "http://localhost/ojaswi";
  addNewRow();
  $("#add").click(function () {
    addNewRow();
  });
  function addNewRow() {
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      data: { getNewOrderItem: 1 },
      success: function (data) {
        let trimmedResponse = $.trim(data);
        $("#invoice_item").append(trimmedResponse);
        var n = 0;
        $(".number").each(function () {
          $(this).html(++n);
        });
      },
    });
  }

  $("#remove").click(function () {
    $("#invoice_item").children("tr:last").remove();
    calculate(0, 0);
  });

  $("#invoice_item").delegate(".product_id", "change", function () {
    var product_id = $(this).val();
    var tr = $(this).parent().parent();
    $(".overlay").show();
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      dataType: "json",
      data: { getPriceAndQty: 1, id: product_id },
      success: function (data) {
        tr.find(".tqty").val(data["product_stock"]);
        tr.find(".product_name").val(data["product_name"]);
        tr.find(".qty").val(1);
        tr.find(".price").val(data["product_price"]);
        tr.find(".amt").html(tr.find(".qty").val() * tr.find(".price").val());
        calculate(0, 0);
      },
    });
  });
  //order farda pan number auane
  $("#get_sales_data").delegate(".select_customer", "change", function () {
    var customer_id = $(this).val();
    var abc = $(this);
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      dataType: "json",
      data: { getPan: 1, id: customer_id },
      success: function (data) {
        $("#customer_pan").val(data["customer_pan"]);
        $("#customer_name").val(data["customer_name"]);
      },
    });
  });
  //For total and validation
  $("#invoice_item").delegate(".qty", "keyup", function () {
    var qty = $(this);
    var tr = $(this).parent().parent();
    if (isNaN(qty.val())) {
      alert("Please enter valid number");
      qty.val(1);
    } else {
      if (qty.val() - 0 > tr.find(".tqty").val() - 0) {
        alert("quantity not available");
        qty.val(1);
      } else {
        tr.find(".amt").html(qty.val() * tr.find(".price").val());
        calculate(0, 0);
      }
    }
  });
  function calculate(dis, paid) {
    var sub_total = 0;
    var net_total = 0;
    var discount = dis;
    var paid_amt = paid;
    var due = 0;
    $(".amt").each(function () {
      sub_total = sub_total + $(this).html() * 1;
    });
    net_total = sub_total - discount;
    due = net_total - paid_amt;
    $("#sub_total").val(sub_total);

    $("#discount").val(discount);
    $("#net_total").val(net_total);

    // $("#sub_total")
    //$("discount")
    // $("#paid")
    $("#due").val(due);
  }
  $("#discount").keyup(function () {
    var discount = $(this).val();
    calculate(discount, 0);
  });

  $("#paid").keyup(function () {
    var paid = $(this).val();
    var discount = $("#discount").val();
    calculate(discount, paid);
  });
  $("#sales_form").click(function () {
    var invoice = $("#get_sales_data").serialize();
    if ($("#select_customer").val() === "") {
      alert("please enter customer name");
    } else if ($("#paid").val() === "") {
      alert("please enter paid amount");
    } else {
      $.ajax({
        url: DOMAIN + "/includes/process.php",
        method: "POST",
        data: $("#get_sales_data").serialize(),
        success: function (data) {
          if (data < 0) {
            alert(data);
          } else {
            //$("#get_sales_data").trigger("reset");
            $("#get_sales_data").trigger("reset");
            if (confirm("DO YOU WANT TO PRINT INVOICE?")) {
              window.location.href =
                DOMAIN + "/includes/invoice_bill.php?invoice_no="+data+"&"+invoice;
            }
          }
        },
      });
    }
  });
});
