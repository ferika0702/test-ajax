$(document).ready(function () {
  $(document).on("click", ".ajaxdosen-save", function () {
    if ($.trim($(".nama_dosen").val()).length == 0) {
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
        nama_dosen: $(".nama_dosen").val(),
        nip: $(".nip").val(),
        no_telepon: $(".no_telepon").val(),
        email: $(".email").val(),
      };
      $.ajax({
        type: "POST",
        url: "/dosen/store",
        data: data,
        success: function (response) {
          $("#dosenModal").modal("hide");
          $("#dosenModal").find("input").val("");
          alertify.set("notifier", "position", "top-right");
          alertify.success(response.status);
        },
      });
    }
  });
});
