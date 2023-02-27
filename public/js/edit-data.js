$(document).ready(function () {
  $(".ajaxmahasiswa-update").on("click", function () {
    var id_mhs = $(this).closest(".modal").attr("id").replace("editModal", "");
    var nama_mhs = $(".nama_mhs").val();
    var tgl_lahir = $(".tgl_lahir").val();
    var nim = $(".nim").val();
    var no_telepon = $(".no_telepon").val();
    var email = $(".email").val();

    $.ajax({
      url: "/mahasiswa/update/" + id_mhs,
      type: "GET",
      data: {
        nama_mhs: nama_mhs,
        tgl_lahir: tgl_lahir,
        nim: nim,
        no_telepon: no_telepon,
        email: email,
      },
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
