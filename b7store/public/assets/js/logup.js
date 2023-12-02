const toggleVisibility = (e) => {
    const id = e;
    const input = document.getElementById(id)
    if (input.type == 'password') {
        input.type = 'text'
    } else{
        input.type = 'password'
    }

    console.log(input.type);
}
