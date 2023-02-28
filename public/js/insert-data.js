$(document).ready(function () {
  $(document).on("click", ".ajaxmahasiswa-save", function () {
    if ($.trim($(".nama_mhs").val()).length == 0) {
      error_name = "Harap Diisi";
      $("#error_name").text(error_name);
    } else {
      error_name = "";
      $("#error_name").text(error_name);
    }
    if (error_name != "") {
      return false;
    } else {
      var data = {
        nama_mhs: $(".nama_mhs").val(),
        tgl_lahir: $(".tgl_lahir").val(),
        nim: $(".nim").val(),
        no_telepon: $(".no_telepon").val(),
        email: $(".email").val(),
      };
      $.ajax({
        type: "POST",
        url: "/mahasiswa/store",
        data: data,
        success: function (response) {
          $("#mahasiswaModal").modal("hide");
          $("#mahasiswaModal").find("input").val("");
          alertify.set("notifier", "position", "top-right");
          alertify.success(response.status);
          location.reload();
          // $(".mahasiswadata").html(response);
        },
      });
    }
  });
});
