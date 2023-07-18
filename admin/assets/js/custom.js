$(document).ready(function () {
  $(".delete_product_btn1").click(function (e) {
    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          method: "POST",
          url: "delete-category.php",
          data: {
            product_id: id,
            delete_product_btn1: true,
          },
          success: function (response) {
            if (response == 200) {
              swal({
                icon: "success",
                title: "Deleted Successfully!",
                button: "Ok",
              });
            } else if (response == 500) {
              swal({
                icon: "error",
                title: "Something went wrong!",
                button: "Ok",
              });
            }
          },
        });
      }
    });
  });
});
