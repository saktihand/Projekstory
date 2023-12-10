const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu");

menuBar.addEventListener("click", () => {
  menuNav.classList.toggle("menu-active");
});

const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  console.log(window.scrollY);
  const windowPosition = window.scrollY > 0;
  navBar.classList.toggle("scrolling-active", windowPosition);
  menuNav.classList.remove("menu-active");
});

document.addEventListener('DOMContentLoaded', function () {
  // Get all the favorite buttons
  const favoriteButtons = document.querySelectorAll('.favorite-btn');

  // Add click event listeners to each button
  favoriteButtons.forEach(button => {
    button.addEventListener('click', toggleFavorite);
  });

  // Function to toggle the favorite state
  function toggleFavorite(event) {
    const button = event.target;
    const box = button.closest('.box'); // Get the parent box element

    // Toggle the 'favorited' class on the box
    box.classList.toggle('favorited');

    // Check if the box is now favorited
    if (box.classList.contains('favorited')) {
      // Perform actions when an item is marked as favorite (e.g., store in local storage)
      console.log('Item marked as favorite:', box.querySelector('h3').innerText);
    } else {
      // Perform actions when an item is unmarked as favorite
      console.log('Item removed from favorites:', box.querySelector('h3').innerText);
    }
  }
});
