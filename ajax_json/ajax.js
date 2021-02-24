const form = {
    cauta:document.getElementById('cauta'),
    submit: document.getElementById('submit-button'),
};

form.submit.addEventListener('click',function(){
    sugestiiCautare();
});

function sugestiiCautare()
{
    let xhr;

    let cautare = document.getElementById('cauta').value;

    if(window.XMLHttpRequest){
        xhr= new XMLHttpRequest;
    }else if (window.ActiveXObject){
        xhr= new ActiveXObject;
    }

    let postData='cautare=' + cautare;

    xhr.open('POST','ajax.php',true);

    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.send(postData);

    xhr.onload= function(){
        document.getElementById('sugestie').innerHTML = xhr.responseText;
    }

    
}