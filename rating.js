const stars = document.querySelectorAll("#stars span");
const ratingValue = document.getElementById("rating-value");

stars.forEach((star, index) => {
  star.addEventListener("click", () => {
    // Fill starsto selected
    ratingValue.value = index + 1;
    updateStars(index);
  });

  star.addEventListener("mouseover", () => {
    updateStars(index);
  });

  star.addEventListener("mouseout", () => {
    updateStars(ratingValue.value - 1);
  });
});

function updateStars(index) {
  stars.forEach((s, i) => {
    if (i <= index) {
      s.className = "fa-solid fa-star cursor-pointer text-yellow-400 text-3xl";
    } else {
      s.className = "fa-regular fa-star cursor-pointer text-yellow-400 text-3xl";
    }
  });
}
