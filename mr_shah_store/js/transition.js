document.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", function (e) {
        if (this.getAttribute("href").endsWith(".html")) {
            e.preventDefault();
            document.body.classList.add("fade-out");

            setTimeout(() => {
                window.location.href = this.href;
            }, 400);
        }
    });
});
