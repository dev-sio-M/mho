document.addEventListener("DOMContentLoaded", function() {
  var additionalFields = document.querySelector('.additional-fields');
  additionalFields.style.display = 'none';
});

function toggleAdditionalFields() {
  var additionalFields = document.querySelector('.additional-fields');

  if (additionalFields.style.display === 'none') {
    additionalFields.style.display = 'block';
  } else {
    additionalFields.style.display = 'none';
  }
}
