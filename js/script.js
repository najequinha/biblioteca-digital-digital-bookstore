document.querySelectorAll('.toggle-btn').forEach(button => {
    button.addEventListener('click', function() {
        const target = document.getElementById(this.dataset.target);
        if (target.style.display === "none" || target.style.display === "") {
            target.style.display = "block";
        } else {
            target.style.display = "none";
        }
    });
});

console.log("Script externo funcionando!");
alert("JavaScript conectado com sucesso!");
