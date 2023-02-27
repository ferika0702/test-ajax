function deleteMahasiswa(id_mhs) {
  $.ajax({
    url: "/mahasiswa/delete/(:num)" + id_mhs,
    type: "DELETE",
    dataType: "json",
    success: function (response) {
      // Tampilkan pesan sukses
      alert(response.message);

      // Hapus baris tabel yang terkait
      $(".mahasiswa-delete" + id_mhs).remove();
    },
    error: function (jqXHR, textStatus, errorThrown) {
      // Tampilkan pesan error
      alert("Terjadi kesalahan: " + errorThrown);
    },
  });
}
