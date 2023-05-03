// accordion for prestation line-chart
const accordion = document.getElementById("line-chart-accordion");
accordion.addEventListener("click", function() {
    const content = document.getElementById("content-etude");
    const toggleChartLineButton = document.getElementById("toggleChartLineButton");
    const emElement = document.getElementsByTagName("em")[0];

    if (content.style.display === "block") {
        content.style.display = "none";
        toggleChartLineButton.classList.remove('fa-minus');
        toggleChartLineButton.style.color = "#efafab";
        toggleChartLineButton.classList.add('fa-plus');
        emElement.innerHTML = "voir plus";
    } else {
        content.style.display = "block";
        toggleChartLineButton.classList.add('fa-minus');
        toggleChartLineButton.style.color = "#a3cd8a";
        toggleChartLineButton.classList.remove('fa-plus');
        emElement.innerHTML = "";
    }
});
