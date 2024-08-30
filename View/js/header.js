class Header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
            <header>
                <h2>Biblioteca Online</h2>
                <nav>
                    <a href="./livro/pagina_livro.html">Livros</a>
                    <a href="./autor/pagina_autor.html">Autores</a>
                    <a href="./estudante/pagina_estudante.html">Estudantes</a>
                    <a href="./emprestimo/pagina_emprestimo.html">Empréstimos</a>
                </nav>
            </header>
        `;
    }
}

customElements.define('main-header', Header);
