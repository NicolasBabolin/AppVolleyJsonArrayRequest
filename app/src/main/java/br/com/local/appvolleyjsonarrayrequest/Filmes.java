package br.com.local.appvolleyjsonarrayrequest;

public class Filmes {
    private String nome;
    private String tipo;

    public Filmes() {
    }

    public Filmes(String nome, String email) {
        this.nome = nome;
        this.tipo = tipo;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String email) {
        this.tipo = tipo;
    }
}
