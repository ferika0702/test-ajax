$(document).ready(function () {
  $(".ajaxmahasiswa-update").on("click", function () {
    var id_mhs = $(this).closest(".modal").attr("id").replace("editModal", "");

    var data = {
      nama_mhs: $(this).closest(".modal").find(".nama_mhs_edit").val(),
      tgl_lahir: $(this).closest(".modal").find(".tgl_lahir_edit").val(),
      nim: $(this).closest(".modal").find(".nim_edit").val(),
      no_telepon: $(this).closest(".modal").find(".no_telepon_edit").val(),
      email: $(this).closest(".modal").find(".email_edit").val(),
    };

    console.log(data);

    $.ajax({
      url: "/mahasiswa/update/" + id_mhs,
      type: "POST",
      data: data,
      success: function (response) {
        console.log(response);
        //reload halaman setelah update
        location.reload();
      },
      error: function () {
        alert("Gagal mengupdate data mahasiswa");
      },
    });
  });
});
