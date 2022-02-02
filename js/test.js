function verif() {
    name = document.f.name.value;
    img = document.f.img.value;
    p_key_word = document.f.p_key_word.value;
    type = document.f.type.value;
    description = document.f.description.value;
    age = document.f.age.value;
    if (type == "" || description == "" || age == "" || name == "" || img == "" || p_key_word == "") {
        alert("Tapez tous les elements !!");
    }
}