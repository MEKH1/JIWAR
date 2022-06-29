const starwrapper = document.querySelector(".stars");
const stars = document.querySelectorAll(".stars a");
stars.forEach((star, clickedIdx) => {
  star.addEventListener("click", () => {
    starwrapper.classList.add("disabled");
    stars.forEach((otherStar, otherIdx) => {
      if (otherIdx <= clickedIdx) {
        otherStar.classList.add("active");
      }
    });
    console.log(`star of index ${clickedIdx + 1} was clicked`)
    funname(clickedIdx + 1);
    // POST to backend your star ranking
  });
});
// function funname(num) {

//     $.post( "../includes/add-stars.php", { starsnum:  num} );
//     .done(function() {
//       alert( "second success" );
//     })
//     .fail(function() {
//       alert( "error" );
//     })
// }
