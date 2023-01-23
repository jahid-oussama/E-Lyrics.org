$(document).ready(function () {

  var table = $('#example').DataTable({
    responsive: true
  })
    .columns.adjust()
    .responsive.recalc();
});

let newDiv = document.querySelector(".newDiv");
let RightContact = document.querySelector(".RightContact");
let btn1 = document.querySelector(".btn1");

btn1.addEventListener("click", () => {
  newDiv.append(RightContact.cloneNode(true));
});
const full = document.forms["form_form"];
function updateData(id, artist, song_title, lyrics) {
  document.getElementById('upDate').classList.remove("hidden");
  // console.log(id,k,j,o);
  console.log(full['id']);
  full['id'].value = id;
  full['artist[]'].value = artist;
  full['song_title[]'].value = song_title;
  full['lyrics[]'].value = lyrics;



}