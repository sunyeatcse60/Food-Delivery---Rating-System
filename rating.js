const stars = document.querySelectorAll('#stars span');
const ratingValue = document.getElementById('rating-value');
stars.forEach((star, idx) => {
  star.addEventListener('click', () => {
    ratingValue.value = idx + 1;
    updateStars(idx);
  });
  star.addEventListener('mouseover', () => {
    updateStars(idx);
  });
  star.addEventListener('mouseout', () => {
    updateStars(ratingValue.value - 1);
  });
});
function updateStars(idx) {
  stars.forEach((star, i) => {
    star.innerHTML = i <= idx ? '&#9733;' : '&#9734;';
  });
}
// // Simple alert on submit
// document.addEventListener('DOMContentLoaded', function() {
//   const form = document.querySelector('form[action="code.php"]');
//   if (form) {
//     form.addEventListener('submit', function() {
//       alert('Feedback submitted!');
//     });
//   }
// });