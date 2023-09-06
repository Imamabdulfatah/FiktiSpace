var slider = document.getElementById("large-range");
var value = document.getElementById("value");

// Update the current value when the slider is moved
slider.addEventListener("input", function () {
    value.innerHTML = slider.value;
});
