class Header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
            <header>
                <h2>Biblioteca Online</h2>
                <nav>
                    <a href="./livro/pagina_livro.php">Livros</a>
                    <a href="./autor/pagina_autor.php">Autores</a>
                    <a href="./estudante/pagina_estudante.php">Estudantes</a>
                    <a href="#emprestimos">Empréstimos</a>
                </nav>
            </header>
        `;
    }
}

customElements.define('main-header', Header);
