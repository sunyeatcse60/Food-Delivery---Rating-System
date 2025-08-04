const stars = document.querySelectorAll("#stars span");
const ratingValue = document.getElementById("rating-value");

stars.forEach((star, index) => {
  star.addEventListener("click", () => {
    // Fill stars up to selected
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
    s.innerHTML = i <= index ? "&#9733;" : "&#9734;";
  });
}
