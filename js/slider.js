let slide = new Array("https://media.istockphoto.com/photos/text-game-time-spelled-out-in-wooden-letter-surrounded-by-dice-other-picture-id1306464121?b=1&k=20&m=1306464121&s=170667a&w=0&h=ZTxUnnccu9u86lWO9TosJ_M13rp9vDHDBwXU6v-jAb0=",
 "https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FtZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60",
  "https://images.unsplash.com/photo-1556084123-fe76122cd5d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Z2FtZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60",
   "https://images.unsplash.com/photo-1627855437292-7efeee237b12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGdhbWVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60",
   "https://media.istockphoto.com/photos/row-of-books-on-a-shelf-multicolored-book-spines-stack-in-the-picture-id1222550815?b=1&k=20&m=1222550815&s=170667a&w=0&h=MTxBeBrrrYtdlpzhMpD1edwLYQf3OPgkNeDEgIzYJww=",
   "https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9va3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60",
  "https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Ym9va3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60",
  "https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJvb2t8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60");
let  numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
    
}
setInterval("ChangeSlide(1)", 4000);