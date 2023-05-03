// accordion for prestation line-chart
const accordion = document.getElementById("line-chart-accordion");
accordion.addEventListener("click", function() {
    const content = document.getElementById("content-etude");
    const toggleChartLineButton = document.getElementById("toggleChartLineButton");

    if (content.style.display === "block") {
        content.style.display = "none";
        toggleChartLineButton.classList.remove('fa-minus');
        toggleChartLineButton.style.color = "#efafab";
        toggleChartLineButton.classList.add('fa-plus');
    } else {
        content.style.display = "block";
        toggleChartLineButton.classList.add('fa-minus');
        toggleChartLineButton.style.color = "#a3cd8a";
        toggleChartLineButton.classList.remove('fa-plus');
    }
});
