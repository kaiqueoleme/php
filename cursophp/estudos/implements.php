<?php
/* INTERFACES
    A interface serve como modelo, assim como classes abstratas, para classes em que serão implementadas (implements). Entretanto, a interface apenas usa de métodos e não atributos e, enquanto cada classe é limitado a apenas 1 'extend', é possível adicionar qualquer quantidade de 'implements'.
*/
interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {

    public function create($data)
    {
        // lógica para criar uma notícia
    }

    public function read()
    {
        // lógica para ler uma notícia
    }

    public function update()
    {
        //lógica para atualizar uma notícia
    }

    public function delete()
    {
        // lógica para deletar uma notícia
    }
}