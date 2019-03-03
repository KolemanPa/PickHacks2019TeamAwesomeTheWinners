function footballPost(){
    var xmlhttp = new XMLHttpRequest();
    var url = "discussion.php?sport=football";        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
function generatePosts(arr){
    if(arr){
        arr.forEach(obj => {
            var html = `
                <p> ${obj} </p>
            `; 
            document.getElementById('posts').innerHTML=html;
        });
    }
}

function basketballPost(){
    var xmlhttp = new XMLHttpRequest();
    var url = "localhost:3306?sport=football";        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


function baseballPost(){
    var xmlhttp = new XMLHttpRequest();
    var url = "discussion.php?sport=football";        // either https://www.dns or localhost:2020
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200)
        {
            generatePosts(JSON.parse(this.responseText));
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}