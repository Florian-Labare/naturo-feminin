const accordions =  [
    {
        elem: document.getElementById("line-chart-accordion"),
        contentId: "content-etude",
        toggleButton: "toggleChartLineButton",
        itemButton: "",
        emElement: ""
    },

    {
        elem: document.getElementById("fleurs-bach"),
        contentId: "fleurs-bach-content",
        toggleButton: "",
        itemButton: "",
        emElement: "em-element-fleur-bach"
    },

    {
        elem: document.getElementById("compte-rendu"),
        contentId: "compte-rendu-content",
        toggleButton: "",
        itemButton: "",
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
        itemButton: "",
        emElement: "em-element-massage-second-section"
    },

    {
        elem: document.getElementById("massage-presta-3"),
        contentId: "massage-content-3",
        toggleButton: "",
        itemButton: "",
        emElement: "em-element-massage-third-section"
    },

    {
        elem: document.getElementById("massage-presta-4"),
        contentId: "massage-content-4",
        toggleButton: "",
        itemButton: "",
        emElement: "em-element-fourth-section"
    },

    {
        elem: document.getElementById("a-propos-item-1-accordion"),
        contentId: "qui-sommes-nous-item-content-1",
        toggleButton: "",
        itemButton: "toggleAproposItem_1",
        emElement: ""
    },

    {
        elem: document.getElementById("a-propos-item-2-accordion"),
        contentId: "qui-sommes-nous-item-content-2",
        toggleButton: "",
        itemButton: "toggleAproposItem_2",
        emElement: ""
    },

    {
        elem: document.getElementById("a-propos-item-3-accordion"),
        contentId: "qui-sommes-nous-item-content-3",
        toggleButton: "",
        itemButton: "toggleAproposItem_3",
        emElement: ""
    },

]

accordions.forEach(({elem, toggleButton, itemButton, emElement, contentId})=> {
    elem.addEventListener("click", () => {
       accordionOnClick(contentId, toggleButton, itemButton, emElement);
    });

})

function accordionOnClick(contentId, toggleButton, itemButton, emElement) {
    const contentToDislpay = document.getElementById(contentId);
    const em = document.getElementsByClassName(emElement)[0];
    const toggle = document.getElementById(toggleButton);
    const itemBtn = document.getElementById(itemButton);

    console.log(itemBtn, toggle);

    if (contentToDislpay.style.display === "block") {
        contentToDislpay.style.display = "none";

        if(toggleButton !== "") {
            toggle.classList.remove('fa-minus');
            toggle.style.color = "#efafab";
            toggle.classList.add('fa-plus');

        } else if (itemButton !== "") {
            itemBtn.classList.remove('fa-minus');
            itemBtn.style.color = "#fff";
            itemBtn.classList.add('fa-plus');

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

        } else if (itemButton !== "") {
            itemBtn.classList.add('fa-minus');
            itemBtn.style.color = "#fff";
            itemBtn.classList.remove('fa-plus');
            
        } else {
            em.style.color = "#a3cd8a";
            em.innerHTML = "(voir moins)";
        }
    }
}

