$(document).ready(function () {
  $(".ajaxdosen-update").on("click", function () {
    var id_dosen = $(this)
      .closest(".modal")
      .attr("id")
      .replace("editModal", "");

    var data = {
      nama_dosen: $(this).closest(".modal").find(".nama_dosen_edit").val(),
      nip: $(this).closest(".modal").find(".nip_edit").val(),
      no_telepon: $(this).closest(".modal").find(".no_telepon_edit").val(),
      email: $(this).closest(".modal").find(".email_edit").val(),
    };

    console.log(data);

    $.ajax({
      url: "/dosen/update/" + id_dosen,
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
