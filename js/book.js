$('.edit-book').click(function(){
  // alert('tes');
  $tr = $(this).closest('tr');
  var kodebuku = $tr.children('.datakodebuku').html();
  var judul = $tr.children('.datajudul').html();
  var penerbit = $tr.children('.datapenerbit').html();
  var pengarang = $tr.children('.datapengarang').html();
  var hargasewa = $tr.children('.datahargasewa').html();
  // var kodebuku = $tr.html();
  console.log(kodebuku);
  console.log(judul);
  console.log(penerbit);
  console.log(pengarang);
  console.log(hargasewa);

  $('#editkodebuku').val(kodebuku);
  $('#editjudulbuku').val(judul);
  $('#editpenerbit').val(penerbit);
  $('#editpengarang').val(pengarang);
  $('#edithargasewa').val(hargasewa);
});
