

function loadForm(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'form.php', true);

    xhr.onreadystatechange = function(){
        if(xhr.status === 200){
            $('#change').html(xhr.responseText);
         } else {
            alert("Error1");
         }
    };
    xhr.send();
}

function generateExcuse(){
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'generate.php', true);

    xhr.onreadystatechange = function(){
        if(xhr.status === 200){
            $('#change').html(xhr.responseText);
         } else {
            alert("Error2");
         }
    };
    xhr.send();
}

function add(){
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'add.php', true);

    xhr.onreadystatechange = function(){
        if(xhr.status === 200){
            $('#change').html(xhr.responseText);
            document.getElementById("change").innerHTML = "Added successfully";
         } else {
            alert("Error");
         }
    };
    xhr.send();
}
