const accordions =  [
    {
        elem: document.getElementById("line-chart-accordion"),
        contentId: "content-etude",
        toggleButton: "toggleChartLineButton",
        emElement: ""
    },

    {
        elem: document.getElementById("fleurs-bach"),
        contentId: "fleurs-bach-content",
        toggleButton: "",
        emElement: "em-element-fleur-bach"
    },

    {
        elem: document.getElementById("compte-rendu"),
        contentId: "compte-rendu-content",
        toggleButton: "",
        emElement: "em-element"
    },

    {
        elem: document.getElementById("massage-presta-1"),
        contentId: "massage-content-1",
        toggleButton: "",
        emElement: "em-element-massage-first-section"
    },

    {
        elem: document.getElementById("massage-presta-2"),
        contentId: "massage-content-2",
        toggleButton: "",
        emElement: "em-element-massage-second-section"
    },

    {
        elem: document.getElementById("massage-presta-3"),
        contentId: "massage-content-3",
        toggleButton: "",
        emElement: "em-element-massage-third-section"
    },

    {
        elem: document.getElementById("massage-presta-4"),
        contentId: "massage-content-4",
        toggleButton: "",
        emElement: "em-element-fourth-section"
    },

]

accordions.forEach(({elem, toggleButton, emElement, contentId})=> {
    elem.addEventListener("click", () => {
       accordionOnClick(contentId, toggleButton, emElement);
    });

})

function accordionOnClick(contentId, toggleButton, emElement) {
    const contentToDislpay = document.getElementById(contentId);
    const em = document.getElementsByClassName(emElement)[0];
    const toggle = document.getElementById(toggleButton);

    if (contentToDislpay.style.display === "block") {
        contentToDislpay.style.display = "none";

        if(toggleButton !== "") {
            toggle.classList.remove('fa-minus');
            toggle.style.color = "#efafab";
            toggle.classList.add('fa-plus');
        } else {
            em.style.color = "#efafab";
            em.innerHTML = "(voir plus)";
        }

    } else {
        contentToDislpay.style.display = "block";

        if(toggleButton !== "") {
            toggle.classList.add('fa-minus');
            toggle.style.color = "#a3cd8a";
            toggle.classList.remove('fa-plus');
        } else {
            em.style.color = "#a3cd8a";
            em.innerHTML = "(voir moins)";
        }
    }
}

