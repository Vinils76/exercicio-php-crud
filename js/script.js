const links = document.querySelector('excluir');

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function(event) {

        event.preventDefault();

        let resposta = confirm("Deseja realmente excluir esses dados?");
        if (resposta) {
            location.href = links[i].getAttribute('href');
        }
    });
}