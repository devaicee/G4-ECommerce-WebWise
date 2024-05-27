$(document).ready(function() {
  $('.filter-menu select').change(function() {
      var category = $(this).val().toLowerCase();
      $('.products-row').each(function() {
          if (category === 'all categories' || $(this).hasClass(category)) {
              $(this).show();
          } else {
              $(this).hide();
          }
      });
  });

   // Search form submit event
   $('#search-form').submit(function(event) {
    event.preventDefault();
    var searchText = $('#search_input').val().toLowerCase();
    $('.products-row').each(function() {
      var matchesSearch = $(this).text().toLowerCase().includes(searchText);
      if (matchesSearch) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  // Close search event
  $('#close_search').click(function() {
    $('#search_input').val('');
    $('.products-row').show(); // Show all products
  });

  // Toggle filter menu
  document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
  });

  // Existing JavaScript code
  document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
  });
  
  document.querySelector(".grid").addEventListener("click", function () {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document.querySelector(".products-area-wrapper").classList.remove("tableView");
  });
  
  document.querySelector(".list").addEventListener("click", function () {
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document.querySelector(".products-area-wrapper").classList.remove("gridView");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
  });
  
  var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                      
    document.documentElement.classList.toggle('light');
    modeSwitch.classList.toggle('active');
  });
});
