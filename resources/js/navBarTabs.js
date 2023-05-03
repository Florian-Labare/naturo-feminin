const tabs = document.querySelectorAll('[data-tab]');
tabs.forEach((ele) =>
    ele.addEventListener("click", function (event) {
        event.preventDefault();
        tabs.forEach((ele) => ele.classList.remove("active"));
        this.classList.add("active");
        window.location = ele.href;
    })
);
